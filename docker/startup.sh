#!/bin/bash

# Simple startup script for SQLite-only Laravel

set -e

echo "🚀 Starting Laravel application..."

# Ensure .env exists
if [ ! -f .env ]; then
    echo "📋 Creating .env file..."
    cp .env.sqlite .env || cp .env.example .env
fi

# Generate app key if not exists
if [ -z "$APP_KEY" ] || ! grep -q "APP_KEY=" .env; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force
fi

# Run migrations (SQLite ready immediately)
echo "🗄️ Running migrations..."
php artisan migrate --force

# Create storage link if not exists
if [ ! -L public/storage ]; then
    echo "🔗 Creating storage link..."
    php artisan storage:link
fi

echo "✅ Laravel application is ready!"

# Start supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf