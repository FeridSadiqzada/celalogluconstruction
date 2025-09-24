#!/bin/bash

# Ultra simple deployment - just SQLite, no external dependencies!

echo "🚀 Ultra simple SQLite deployment..."

# Create .env
cp .env.sqlite .env

# One command deployment
docker run -d \
  --name celaloglu-app \
  -p 5555:5555 \
  -v $(pwd)/database:/var/www/html/database \
  -v $(pwd)/storage:/var/www/html/storage \
  -e DB_CONNECTION=sqlite \
  -e DB_DATABASE=/var/www/html/database/database.sqlite \
  -e CACHE_DRIVER=file \
  -e SESSION_DRIVER=file \
  -e QUEUE_CONNECTION=sync \
  $(docker build -q -f Dockerfile.sqlite .)

echo "⏳ Waiting for container..."
sleep 10

# Setup Laravel
docker exec celaloglu-app php artisan key:generate --force
docker exec celaloglu-app php artisan migrate --force
docker exec celaloglu-app php artisan storage:link

echo "✅ Done! Website: http://localhost:5555"
echo "🔧 Create admin: docker exec -it celaloglu-app php artisan filament:user"