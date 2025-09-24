#!/bin/bash

# Simple Docker deployment script

echo "🚀 Simple Docker deployment starting..."

# Check if .env exists
if [ ! -f .env ]; then
    echo "📋 Creating .env file..."
    cp .env.docker .env
    echo "⚠️  Please update .env file with your configuration!"
fi

# Create directories
mkdir -p backups storage/logs

# Build and start
echo "🔨 Building and starting containers..."
docker-compose up -d --build

# Wait for containers
echo "⏳ Waiting for containers to start..."
sleep 30

# Setup Laravel
echo "⚙️ Setting up Laravel..."
docker-compose exec -T app php artisan key:generate --force || echo "Key already exists"
docker-compose exec -T app php artisan migrate --force || echo "Migration failed, continuing..."
docker-compose exec -T app php artisan storage:link || echo "Storage link failed, continuing..."

# Show status
echo "📊 Container status:"
docker-compose ps

echo "✅ Deployment completed!"
echo "🌐 Your website should be running at http://localhost"
echo ""
echo "📋 Next steps:"
echo "1. Update .env file with your actual configuration"
echo "2. Create admin user: docker-compose exec app php artisan filament:user"
echo "3. Check logs: docker-compose logs -f app"