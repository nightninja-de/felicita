#!/bin/sh
set -e

# Generate APP_KEY on first boot if one isn't set via env vars
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# composer install ran with --no-scripts at build time (no env vars were
# available yet), so discover packages now that real config is present.
composer dump-autoload --optimize --no-interaction
php artisan package:discover --ansi

php artisan config:clear
php artisan migrate --force

exec "$@"
