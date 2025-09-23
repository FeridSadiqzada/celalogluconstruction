#!/bin/bash

# Quick deployment script - run this after server setup

echo "🚀 Quick deployment starting..."

# Navigate to web directory
cd /var/www/html

# Clone repository (replace with your repo URL)
echo "📥 Cloning repository..."
sudo git clone https://github.com/FeridSadiqzada/celalogluconstruction.git .

# Set permissions
echo "🔐 Setting permissions..."
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html
sudo chmod -R 775 storage bootstrap/cache

# Copy environment file
echo "⚙️ Setting up environment..."
sudo cp .env.server .env

# Install dependencies
echo "📦 Installing dependencies..."
composer install --no-dev --optimize-autoloader
npm install

# Generate application key
echo "🔑 Generating application key..."
php artisan key:generate

# Build assets
echo "🔨 Building assets..."
npm run build

# Run migrations and seed
echo "🗄️ Setting up database..."
php artisan migrate --force
php artisan db:seed --force

# Create storage link
echo "🔗 Creating storage link..."
php artisan storage:link

# Cache everything
echo "💾 Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create admin user
echo "👤 Creating admin user..."
php artisan filament:user

echo "✅ Quick deployment completed!"
echo "🌐 Your website should now be accessible"