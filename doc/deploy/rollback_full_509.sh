#!/bin/bash
# Rollback del deploy completo 5.0.9 su UPIA produzione.
# Uso: bash rollback_full_509.sh <STAMP> [--db]
#   <STAMP> = suffisso stampato dal deploy (es. 20260818_143000)
#   --db    = ripristina anche il DB dal dump pre-deploy (necessario se upgrade.php aveva già toccato il DB)
set -euo pipefail
STAMP="${1:?Uso: rollback_full_509.sh <STAMP> [--db]}"
WITHDB="${2:-}"
WWW=/media/dati/ivf/docker/upia/var/www
BASE="$WWW/iomad"
OLD="$WWW/iomad-old-$STAMP"
DUMP="$WWW/deploy_backup_$STAMP/mdl_upia_pre_deploy_$STAMP.dump"
PHPC=$(docker ps --format '{{.Names}}' | grep -iE 'upia.*php|php.*upia' | head -1)
PGC=$(docker ps --format '{{.Names}}' | grep -iE 'upia.*postgres|postgres.*upia' | head -1)
[ -d "$OLD" ] || { echo "ERRORE: $OLD non trovato"; exit 1; }

docker exec -w /var/www/iomad "$PHPC" php admin/cli/maintenance.php --enable || true
NOW=$(date +%Y%m%d_%H%M%S)
mv "$BASE" "$WWW/iomad-failed-$NOW"
mv "$OLD" "$BASE"
echo "Codice ripristinato (albero fallito in $WWW/iomad-failed-$NOW)"

if [ "$WITHDB" = "--db" ]; then
  [ -f "$DUMP" ] || { echo "ERRORE: dump $DUMP non trovato"; exit 1; }
  docker exec -i "$PGC" pg_restore -U mdl_upia -d mdl_upia --clean --if-exists --no-owner < "$DUMP"
  echo "DB ripristinato da $DUMP"
fi

docker exec -w /var/www/iomad "$PHPC" php admin/cli/purge_caches.php || true
docker exec -w /var/www/iomad "$PHPC" php admin/cli/maintenance.php --disable
docker exec "$PHPC" grep -m1 "^\$release" /var/www/iomad/version.php
echo "ROLLBACK COMPLETATO."
