#!/bin/bash

# Debug deployment to fix 502 Bad Gateway

echo "🔧 Debug deployment (502 Bad Gateway düzəlişi)..."

# Stop and remove old container
docker stop celaloglu-debug 2>/dev/null || true
docker rm celaloglu-debug 2>/dev/null || true

# Build and run
docker run -d \
  --name celaloglu-debug \
  -p 5555:5555 \
  --restart unless-stopped \
  $(docker build -q -f Dockerfile.simple-sqlite .)

echo "⏳ Container starting..."
sleep 15

# Check container status
if docker ps | grep -q celaloglu-debug; then
    echo "✅ Container is running!"
    
    # Test nginx config
    echo "🔧 Testing nginx config..."
    docker exec celaloglu-debug nginx -t
    
    # Check PHP-FPM status
    echo "🔧 Checking PHP-FPM..."
    docker exec celaloglu-debug ps aux | grep php-fpm
    
    # Check if port 9000 is listening
    echo "🔧 Checking port 9000..."
    docker exec celaloglu-debug netstat -tlnp | grep :9000 || echo "Port 9000 not found"
    
    # Test website
    echo "🌐 Testing website..."
    curl -I http://localhost:5555 || echo "Website not responding"
    
    echo ""
    echo "📊 Recent logs:"
    docker logs --tail 20 celaloglu-debug
    
else
    echo "❌ Container failed to start!"
    docker logs celaloglu-debug
fi

echo ""
echo "🔧 Debug commands:"
echo "docker exec -it celaloglu-debug sh"
echo "docker logs -f celaloglu-debug"