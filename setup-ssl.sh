#!/bin/bash

# SSL setup script for Docker deployment

DOMAIN=${1:-your-domain.com}

echo "🔒 Setting up SSL for domain: $DOMAIN"

# Check if domain is provided
if [ "$DOMAIN" = "your-domain.com" ]; then
    echo "❌ Please provide your actual domain name:"
    echo "   ./setup-ssl.sh yourdomain.com"
    exit 1
fi

# Create SSL directory
mkdir -p docker/ssl

# Generate self-signed certificate for development
if [ "$2" = "--self-signed" ]; then
    echo "🔧 Generating self-signed certificate..."
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -keyout docker/ssl/privkey.pem \
        -out docker/ssl/fullchain.pem \
        -subj "/C=AZ/ST=Baku/L=Baku/O=Celaloglu Insaat/CN=$DOMAIN"
    
    echo "✅ Self-signed certificate generated"
    echo "⚠️  This is for development only!"
else
    # Production SSL with Let's Encrypt
    echo "🔒 Setting up Let's Encrypt SSL..."
    
    # Install certbot if not exists
    if ! command -v certbot &> /dev/null; then
        echo "📦 Installing certbot..."
        sudo apt update
        sudo apt install -y certbot
    fi
    
    # Stop containers temporarily
    echo "⏸️  Stopping containers..."
    docker-compose down
    
    # Get certificate
    echo "📜 Obtaining SSL certificate..."
    sudo certbot certonly --standalone \
        --email admin@$DOMAIN \
        --agree-tos \
        --no-eff-email \
        -d $DOMAIN \
        -d www.$DOMAIN
    
    # Copy certificates
    sudo cp /etc/letsencrypt/live/$DOMAIN/fullchain.pem docker/ssl/
    sudo cp /etc/letsencrypt/live/$DOMAIN/privkey.pem docker/ssl/
    sudo chown $(whoami):$(whoami) docker/ssl/*.pem
    
    # Update nginx config for SSL
    cat > docker/nginx/default.conf << EOF
# HTTP to HTTPS redirect
server {
    listen 80;
    server_name $DOMAIN www.$DOMAIN;
    return 301 https://\$server_name\$request_uri;
}

# HTTPS server
server {
    listen 443 ssl http2;
    server_name $DOMAIN www.$DOMAIN;
    root /var/www/html/public;
    index index.php index.html;

    # SSL Configuration
    ssl_certificate /etc/ssl/certs/fullchain.pem;
    ssl_certificate_key /etc/ssl/certs/privkey.pem;
    
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-RSA-AES256-GCM-SHA512:DHE-RSA-AES256-GCM-SHA512:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES256-GCM-SHA384;
    ssl_prefer_server_ciphers off;
    ssl_session_cache shared:SSL:10m;
    ssl_session_timeout 10m;

    # Security headers
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header Referrer-Policy "strict-origin-when-cross-origin" always;

    # Logging
    access_log /var/log/nginx/access.log;
    error_log /var/log/nginx/error.log;

    # Handle Laravel routes
    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    # Handle PHP files
    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
        include fastcgi_params;
        
        fastcgi_hide_header X-Powered-By;
        fastcgi_read_timeout 300;
        fastcgi_send_timeout 300;
        fastcgi_connect_timeout 300;
    }

    # Cache static files
    location ~* \.(jpg|jpeg|png|gif|ico|css|js|woff|woff2|ttf|svg|webp)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        access_log off;
        try_files \$uri =404;
    }

    # Health check endpoint
    location /health {
        access_log off;
        return 200 "healthy\n";
        add_header Content-Type text/plain;
    }

    # Deny access to sensitive files
    location ~ /\. {
        deny all;
        access_log off;
        log_not_found off;
    }

    location ~ /(storage|bootstrap|config|database|resources|routes|tests|vendor)/ {
        deny all;
        access_log off;
        log_not_found off;
    }

    location ~ \.(env|log|md|txt)$ {
        deny all;
        access_log off;
        log_not_found off;
    }

    location = /favicon.ico {
        access_log off;
        log_not_found off;
    }

    location = /robots.txt {
        access_log off;
        log_not_found off;
    }
}
EOF

    # Update docker-compose for SSL
    sed -i 's/- "80:80"/- "80:80"\n      - "443:443"/' docker-compose.yml
    
    # Start containers
    echo "🚀 Starting containers with SSL..."
    docker-compose up -d
    
    # Setup auto-renewal
    echo "🔄 Setting up auto-renewal..."
    (crontab -l 2>/dev/null; echo "0 12 * * * /usr/bin/certbot renew --quiet --deploy-hook 'docker-compose restart app'") | crontab -
    
    echo "✅ SSL certificate installed and auto-renewal configured"
fi

echo "🔒 SSL setup completed for $DOMAIN"