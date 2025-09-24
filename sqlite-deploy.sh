#!/bin/bash

# Ultra simple SQLite deployment - no external dependencies!

echo "🚀 SQLite deployment starting..."

# Create .env file
if [ ! -f .env ]; then
    echo "📋 Creating .env file..."
    cp .env.sqlite .env
    echo "✅ Environment file created"
fi

# Create database directory
mkdir -p database storage/logs

# Build and start container
echo "🔨 Building container..."
docker-compose -f docker-compose.sqlite.yml up -d --build

# Wait a bit
echo "⏳ Waiting for container to start..."
sleep 15

# Setup Laravel
echo "⚙️ Setting up Laravel..."
docker-compose -f docker-compose.sqlite.yml exec -T app php artisan key:generate --force
docker-compose -f docker-compose.sqlite.yml exec -T app php artisan migrate --force
docker-compose -f docker-compose.sqlite.yml exec -T app php artisan db:seed --force
docker-compose -f docker-compose.sqlite.yml exec -T app php artisan storage:link

# Show status
echo "📊 Container status:"
docker-compose -f docker-compose.sqlite.yml ps

echo "✅ Deployment completed!"
echo ""
echo "🌐 Your website is running at: http://localhost"
echo "🔧 Admin panel: http://localhost/admin"
echo ""
echo "📋 Useful commands:"
echo "  Create admin: docker-compose -f docker-compose.sqlite.yml exec app php artisan filament:user"
echo "  View logs:    docker-compose -f docker-compose.sqlite.yml logs -f"
echo "  Stop:         docker-compose -f docker-compose.sqlite.yml down"
echo "  Shell:        docker-compose -f docker-compose.sqlite.yml exec app sh"
echo ""
echo "🎉 Everything is self-contained - no external databases needed!"