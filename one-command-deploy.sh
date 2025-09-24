#!/bin/bash

# One command deployment - everything built into container

echo "🚀 One command deployment..."

# Build and run in one step
docker run -d \
  --name celaloglu-simple \
  -p 5555:5555 \
  --restart unless-stopped \
  $(docker build -q -f Dockerfile.simple-sqlite .)

echo "⏳ Container starting..."
sleep 15

# Check status
if docker ps | grep -q celaloglu-simple; then
    echo "✅ Deployment successful!"
    echo "🌐 Website: http://localhost:5555"
    echo "🔧 Admin panel: http://localhost:5555/admin"
    echo ""
    echo "📋 Create admin user:"
    echo "docker exec -it celaloglu-simple php artisan filament:user"
    echo ""
    echo "📊 Container logs:"
    echo "docker logs -f celaloglu-simple"
else
    echo "❌ Deployment failed!"
    echo "📊 Check logs:"
    echo "docker logs celaloglu-simple"
fi