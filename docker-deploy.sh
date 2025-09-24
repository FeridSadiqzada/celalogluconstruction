#!/bin/bash

# Docker deployment script for Cəlaloğlu İnşaat MMC

set -e

echo "🚀 Starting Docker deployment..."

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "❌ Docker is not installed. Please install Docker first."
    exit 1
fi

if ! command -v docker-compose &> /dev/null; then
    echo "❌ Docker Compose is not installed. Please install Docker Compose first."
    exit 1
fi

# Create necessary directories
echo "📁 Creating directories..."
mkdir -p backups
mkdir -p docker/ssl
mkdir -p storage/logs

# Copy environment file
if [ ! -f .env ]; then
    echo "📋 Copying environment file..."
    cp .env.docker .env
    echo "⚠️  Please update .env file with your actual configuration!"
fi

# Pull latest changes (if in git repo)
if [ -d .git ]; then
    echo "📥 Pulling latest changes..."
    git pull origin main || echo "⚠️  Could not pull from git"
fi

# Build assets locally first
echo "🔨 Building assets..."
if command -v npm &> /dev/null; then
    npm install
    npm run build
else
    echo "⚠️  npm not found, skipping asset build"
fi

# Build and start containers
echo "🔨 Building Docker images..."
docker-compose build --no-cache

echo "🚀 Starting containers..."
docker-compose up -d

# Wait for database to be ready
echo "⏳ Waiting for database to be ready..."
sleep 30

# Run Laravel setup commands
echo "⚙️ Setting up Laravel..."
docker-compose exec -T app php artisan key:generate --force

# Clear any existing caches first
docker-compose exec -T app php artisan config:clear
docker-compose exec -T app php artisan route:clear
docker-compose exec -T app php artisan view:clear
docker-compose exec -T app php artisan cache:clear

# Run migrations and seed
docker-compose exec -T app php artisan migrate --force
docker-compose exec -T app php artisan db:seed --force
docker-compose exec -T app php artisan storage:link

# Cache configurations
docker-compose exec -T app php artisan config:cache
docker-compose exec -T app php artisan route:cache
docker-compose exec -T app php artisan view:cache

# Create admin user
echo "👤 Creating admin user..."
docker-compose exec app php artisan filament:user

# Show status
echo "📊 Container status:"
docker-compose ps

echo "✅ Deployment completed successfully!"
echo ""
echo "🌐 Your website is now running at:"
echo "   HTTP:  http://localhost"
echo "   Admin: http://localhost/admin"
echo ""
echo "📋 Useful commands:"
echo "   View logs:     docker-compose logs -f"
echo "   Stop:          docker-compose down"
echo "   Restart:       docker-compose restart"
echo "   Shell access:  docker-compose exec app sh"
echo ""
echo "🔧 Don't forget to:"
echo "   1. Update .env file with your actual configuration"
echo "   2. Configure your domain name"
echo "   3. Set up SSL certificates"
echo "   4. Configure backup schedule"