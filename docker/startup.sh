#!/bin/bash

# Startup script for Laravel application

set -e

echo "🚀 Starting Laravel application..."

# Wait for database to be ready
echo "⏳ Waiting for database..."
sleep 10

echo "✅ Database is ready"

# Generate app key if not exists
if [ -z "$APP_KEY" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force
fi

# Run migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# Create storage link if not exists
if [ ! -L public/storage ]; then
    echo "🔗 Creating storage link..."
    php artisan storage:link
fi

# Cache configurations
echo "💾 Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Laravel application is ready!"

# Start supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf