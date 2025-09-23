#!/bin/bash

# VPS deployment script for Cəlaloğlu İnşaat MMC

echo "🚀 Starting deployment..."

# Pull latest changes
echo "📥 Pulling latest changes..."
git pull origin main

# Install/update dependencies
echo "📦 Installing dependencies..."
composer install --no-dev --optimize-autoloader
npm install

# Build assets
echo "🔨 Building assets..."
npm run build

# Clear and cache Laravel
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

echo "💾 Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# Set permissions
echo "🔐 Setting permissions..."
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Restart services
echo "🔄 Restarting services..."
sudo systemctl reload nginx
sudo systemctl restart php8.3-fpm

echo "✅ Deployment completed successfully!"
echo "🌐 Website is live at your domain"