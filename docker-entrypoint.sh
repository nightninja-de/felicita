#!/bin/sh
set -e

# Generate APP_KEY on first boot if one isn't set via env vars
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

php artisan config:clear
php artisan migrate --force

exec "$@"
