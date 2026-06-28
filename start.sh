#!/bin/bash
set -e

# Generate APP_KEY if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Cache config/routes/views with runtime env vars (APP_KEY, APP_URL, etc.)
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage symlink (safe to fail if already exists)
php artisan storage:link 2>/dev/null || true

# Start PHP built-in server — Railway sets $PORT automatically
exec php -S "0.0.0.0:${PORT:-8000}" -t public
