#!/bin/bash

# Composer dependencies install et
composer install --no-dev --optimize-autoloader

# NPM dependencies install et
npm install

# Assets build et
npm run build

# Laravel cache clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build completed!"