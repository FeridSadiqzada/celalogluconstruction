#!/bin/bash

# Fixed deployment with proper supervisor logs

echo "🚀 Fixed SQLite deployment (supervisor logs düzəldildi)..."

# Stop and remove old container if exists
docker stop celaloglu-fixed 2>/dev/null || true
docker rm celaloglu-fixed 2>/dev/null || true

# Build and run with fixed supervisor config
docker run -d \
  --name celaloglu-fixed \
  -p 5555:5555 \
  --restart unless-stopped \
  $(docker build -q -f Dockerfile.simple-sqlite .)

echo "⏳ Container starting..."
sleep 10

# Check if container is running properly
if docker ps | grep -q celaloglu-fixed; then
    echo "✅ Container is running!"
    
    # Check logs for any errors
    echo "📊 Container logs (son 10 sətir):"
    docker logs --tail 10 celaloglu-fixed
    
    echo ""
    echo "🌐 Website: http://localhost:5555"
    echo "🔧 Admin panel: http://localhost:5555/admin"
    echo ""
    echo "📋 Create admin user:"
    echo "docker exec -it celaloglu-fixed php artisan filament:user"
    
else
    echo "❌ Container failed to start!"
    echo "📊 Error logs:"
    docker logs celaloglu-fixed
fi