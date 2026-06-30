#!/bin/bash
# Rollback dei 6 fix reportistica: ripristina i file dalla cartella di backup.
# Uso: bash /tmp/rollback_report_fixes.sh /media/dati/.../iomad_report_fix_backup_AAAAMMGG_HHMMSS
set -euo pipefail

BASE=/media/dati/ivf/docker/upia/var/www/iomad
BK="${1:-}"
if [ -z "$BK" ] || [ ! -d "$BK" ]; then
  echo "Uso: bash /tmp/rollback_report_fixes.sh <cartella_backup>"
  exit 1
fi

FILES="
local/report_users/lang/it/local_report_users.php
local/report_completion/classes/tables/user_table.php
local/report_completion/styles.css
local/report_completion/index.php
local/report_completion_overview/index.php
local/report_completion_overview/lang/it/local_report_completion_overview.php
"

PHPC=$(docker ps --format '{{.Names}}' | grep -iE 'upia.*php|php.*upia' | head -1)
if [ -z "$PHPC" ]; then echo "ERRORE: container PHP di UPIA non trovato"; exit 1; fi

for f in $FILES; do
  cp -a "$BK/$f" "$BASE/$f"
done
chown -R www-data:www-data "$BASE/local/report_users" "$BASE/local/report_completion" "$BASE/local/report_completion_overview"

docker restart "$PHPC"
sleep 6
docker exec "$PHPC" php /var/www/iomad/admin/cli/purge_caches.php || true

echo "ROLLBACK COMPLETATO dai file in: $BK"
