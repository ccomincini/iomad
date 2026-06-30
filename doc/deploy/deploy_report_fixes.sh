#!/bin/bash
# Deploy chirurgico dei 6 fix reportistica IOMAD su UPIA produzione.
# Backup automatico -> download dal commit -> sovrascrittura -> restart + purge.
set -euo pipefail

SHA=edb988e93c16592ec627b74e2c14dc63456108cc
BASE=/media/dati/ivf/docker/upia/var/www/iomad
STAMP=$(date +%Y%m%d_%H%M%S)
BK="/media/dati/ivf/docker/upia/var/www/iomad_report_fix_backup_$STAMP"
STG="/tmp/iomad_report_fix_$STAMP"

FILES="
local/report_users/lang/it/local_report_users.php
local/report_completion/classes/tables/user_table.php
local/report_completion/styles.css
local/report_completion/index.php
local/report_completion_overview/index.php
local/report_completion_overview/lang/it/local_report_completion_overview.php
"

# Rileva il nome del container PHP (gestisce sia upia_php_1 sia upia-php-1).
PHPC=$(docker ps --format '{{.Names}}' | grep -iE 'upia.*php|php.*upia' | head -1)
if [ -z "$PHPC" ]; then echo "ERRORE: container PHP di UPIA non trovato (docker ps)"; exit 1; fi
echo "Container PHP: $PHPC"
echo "Sito:          $BASE"

# 1) Scarica i 6 file in staging e verifica che esistano e non siano vuoti.
for f in $FILES; do
  mkdir -p "$STG/$(dirname "$f")"
  curl -fsSL "https://raw.githubusercontent.com/ccomincini/iomad/$SHA/$f" -o "$STG/$f"
  test -s "$STG/$f" || { echo "ERRORE: download fallito o vuoto: $f"; exit 1; }
done
echo "Download OK (6 file dal commit $SHA)"

# 2) Backup dei file attuali (per il rollback).
for f in $FILES; do
  mkdir -p "$BK/$(dirname "$f")"
  cp -a "$BASE/$f" "$BK/$f"
done
echo "Backup salvato in: $BK"

# 3) Sovrascrivi e ripristina i permessi.
for f in $FILES; do
  cp -a "$STG/$f" "$BASE/$f"
done
chown -R www-data:www-data "$BASE/local/report_users" "$BASE/local/report_completion" "$BASE/local/report_completion_overview"
echo "File aggiornati."

# 4) Reset opcache (restart container) + svuota le cache di Moodle.
docker restart "$PHPC"
sleep 6
docker exec "$PHPC" php /var/www/iomad/admin/cli/purge_caches.php || true

echo "============================================================"
echo "DEPLOY COMPLETATO."
echo "Per il ROLLBACK:  bash /tmp/rollback_report_fixes.sh $BK"
echo "============================================================"
