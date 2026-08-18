#!/bin/bash
# Deploy COMPLETO del ramo allineamento-500-20260529 (Moodle 5.0.9 / IOMAD 5.0.8 + fix UPIA)
# su UPIA produzione (mweb02). Da eseguire come root sul server.
# Procedura: manutenzione ON -> pg_dump -> git archive in iomad-new -> ripristino plugin locali
#            -> chown -> swap atomico -> upgrade.php -> purge_caches -> manutenzione OFF.
set -euo pipefail

BRANCH=allineamento-500-20260529
EXPECTED_RELEASE="5.0.9"
WWW=/media/dati/ivf/docker/upia/var/www
BASE="$WWW/iomad"
STAMP=$(date +%Y%m%d_%H%M%S)
BKDIR="$WWW/deploy_backup_$STAMP"
NEW="$WWW/iomad-new-$STAMP"
CLONE="/tmp/iomad-clone-$STAMP"
# Plugin/file locali NON presenti nel repo: vanno ricopiati a ogni deploy.
LOCALS="config.php theme/moove payment/gateway/bank local/attestati mod/attestato"

PHPC=$(docker ps --format '{{.Names}}' | grep -iE 'upia.*php|php.*upia' | head -1)
PGC=$(docker ps --format '{{.Names}}' | grep -iE 'upia.*postgres|postgres.*upia' | head -1)
[ -n "$PHPC" ] || { echo "ERRORE: container PHP di UPIA non trovato"; exit 1; }
[ -n "$PGC" ]  || { echo "ERRORE: container Postgres di UPIA non trovato"; exit 1; }
[ -d "$BASE" ] || { echo "ERRORE: $BASE non esiste"; exit 1; }
echo "Container PHP: $PHPC   Container PG: $PGC"
echo "Sito: $BASE   Backup: $BKDIR"
mkdir -p "$BKDIR"
# Alberi "iomad-new-*" rimasti da tentativi precedenti interrotti prima dello swap: rimuoverli.
for stale in "$WWW"/iomad-new-*; do
  [ -d "$stale" ] && { echo "Rimuovo albero incompleto precedente: $stale"; rm -rf "$stale"; }
done

# 0) Versione attuale
docker exec "$PHPC" grep -m1 "^\$release" /var/www/iomad/version.php || true

# 1) Clone shallow del ramo + verifica versione attesa PRIMA di toccare il sito
git clone -q --depth 1 -b "$BRANCH" https://github.com/ccomincini/iomad.git "$CLONE"
git -C "$CLONE" log --oneline -1
grep -q "$EXPECTED_RELEASE" "$CLONE/version.php" || { echo "ERRORE: version.php del clone non contiene $EXPECTED_RELEASE"; exit 1; }
mkdir -p "$NEW"
git -C "$CLONE" archive HEAD | tar -x -C "$NEW"
rm -rf "$CLONE"
echo "Albero nuovo pronto in $NEW"

# 2) Ripristino plugin/file locali (obbligatorio: senza local/attestati e mod/attestato l'upgrade li segnalerebbe mancanti)
for p in $LOCALS; do
  if [ -e "$BASE/$p" ]; then
    mkdir -p "$NEW/$(dirname "$p")"
    cp -a "$BASE/$p" "$NEW/$p"
    echo "  ripristinato: $p"
  else
    echo "  ATTENZIONE: $p non presente nel sito attuale (saltato)"
  fi
done
[ -f "$NEW/config.php" ] || { echo "ERRORE: config.php mancante nel nuovo albero"; exit 1; }

# 3) Report delle altre cartelle plugin presenti SOLO nel sito attuale (non copiate: verificare a mano se servono)
echo "--- Cartelle presenti solo nel sito attuale (profondità plugin), NON copiate:"
for d in theme local mod blocks auth enrol filter report admin/tool availability/condition payment/gateway question/type question/bank; do
  [ -d "$BASE/$d" ] || continue
  for x in "$BASE/$d"/*/; do
    n=$(basename "$x"); [ -d "$NEW/$d/$n" ] || echo "  solo in attuale: $d/$n"
  done
done
echo "--- fine report"

chown -R www-data:www-data "$NEW"

# 4) Manutenzione ON + dump DB
# Il dump va fatto come superutente: la tabella di backup mdl_iomad_courses_bk_20260703 ha proprietario
# "postgres" e mdl_upia non può bloccarla (LOCK TABLE ... permission denied). Ripiego: dump escludendo quella tabella.
docker exec -w /var/www/iomad "$PHPC" php admin/cli/maintenance.php --enable
DUMP="$BKDIR/mdl_upia_pre_deploy_$STAMP.dump"
if ! docker exec "$PGC" pg_dump -Fc -U postgres mdl_upia > "$DUMP" 2>"$BKDIR/pg_dump.err"; then
  echo "pg_dump come postgres fallito ($(head -c 300 "$BKDIR/pg_dump.err")); riprovo come mdl_upia escludendo mdl_iomad_courses_bk_20260703"
  docker exec "$PGC" pg_dump -Fc -U mdl_upia -T mdl_iomad_courses_bk_20260703 mdl_upia > "$DUMP"
fi
[ -s "$DUMP" ] || { echo "ERRORE: dump vuoto"; exit 1; }
ls -la "$DUMP"

# 5) Swap atomico
mv "$BASE" "$WWW/iomad-old-$STAMP"
mv "$NEW" "$BASE"
echo "Swap eseguito: vecchio albero in $WWW/iomad-old-$STAMP"

# 6) Upgrade + purge + manutenzione OFF
set +e
docker exec -w /var/www/iomad "$PHPC" php admin/cli/upgrade.php --non-interactive 2>&1 | grep -v "Deprecated" | tail -25
RC=${PIPESTATUS[0]}
set -e
if [ "$RC" -ne 0 ]; then
  echo "============================================================"
  echo "ERRORE upgrade.php (rc=$RC). Il sito resta in MANUTENZIONE."
  echo "Rollback: bash /root/rollback_full_509.sh $STAMP        (solo codice)"
  echo "          bash /root/rollback_full_509.sh $STAMP --db   (codice + restore DB)"
  echo "============================================================"
  exit "$RC"
fi
docker exec -w /var/www/iomad "$PHPC" php admin/cli/purge_caches.php
docker exec -w /var/www/iomad "$PHPC" php admin/cli/maintenance.php --disable
docker exec "$PHPC" grep -m1 "^\$release" /var/www/iomad/version.php
curl -s -o /dev/null -w "HTTP login page: %{http_code}\n" https://upia.formazionesanitaria.it/login/index.php || true

echo "============================================================"
echo "DEPLOY COMPLETATO. STAMP=$STAMP"
echo "Vecchio albero: $WWW/iomad-old-$STAMP   Dump: $BKDIR"
echo "Rollback: bash /root/rollback_full_509.sh $STAMP [--db]"
echo "============================================================"
