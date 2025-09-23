#!/bin/bash

# VPS Server Setup Script for Cəlaloğlu İnşaat MMC
# Ubuntu 22.04 LTS

echo "🚀 Starting server setup..."

# Update system
echo "📦 Updating system packages..."
sudo apt update && sudo apt upgrade -y

# Install required packages
echo "📦 Installing required packages..."
sudo apt install -y nginx mysql-server php8.3-fpm php8.3-mysql php8.3-xml php8.3-gd php8.3-curl php8.3-mbstring php8.3-zip php8.3-bcmath php8.3-intl php8.3-redis redis-server git curl unzip

# Install Node.js and npm
echo "📦 Installing Node.js..."
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt-get install -y nodejs

# Install Composer
echo "📦 Installing Composer..."
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer

# Configure MySQL
echo "🗄️ Configuring MySQL..."
sudo mysql -e "CREATE DATABASE celaloglu_insaat CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
sudo mysql -e "CREATE USER 'celaloglu_user'@'localhost' IDENTIFIED BY 'secure_password_123';"
sudo mysql -e "GRANT ALL PRIVILEGES ON celaloglu_insaat.* TO 'celaloglu_user'@'localhost';"
sudo mysql -e "FLUSH PRIVILEGES;"

# Configure PHP-FPM
echo "⚙️ Configuring PHP-FPM..."
sudo sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/' /etc/php/8.3/fpm/php.ini
sudo sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 64M/' /etc/php/8.3/fpm/php.ini
sudo sed -i 's/post_max_size = 8M/post_max_size = 64M/' /etc/php/8.3/fpm/php.ini
sudo sed -i 's/max_execution_time = 30/max_execution_time = 300/' /etc/php/8.3/fpm/php.ini
sudo sed -i 's/memory_limit = 128M/memory_limit = 512M/' /etc/php/8.3/fpm/php.ini

# Create web directory
echo "📁 Creating web directory..."
sudo mkdir -p /var/www/html
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html

# Configure Nginx
echo "🌐 Configuring Nginx..."
sudo rm /etc/nginx/sites-enabled/default
sudo systemctl enable nginx
sudo systemctl enable php8.3-fpm
sudo systemctl enable mysql
sudo systemctl enable redis-server

# Start services
echo "🔄 Starting services..."
sudo systemctl start nginx
sudo systemctl start php8.3-fpm
sudo systemctl start mysql
sudo systemctl start redis-server

# Configure firewall
echo "🔥 Configuring firewall..."
sudo ufw allow OpenSSH
sudo ufw allow 'Nginx Full'
sudo ufw --force enable

# Install SSL certificate (Let's Encrypt)
echo "🔒 Installing Certbot for SSL..."
sudo apt install -y certbot python3-certbot-nginx

echo "✅ Server setup completed!"
echo ""
echo "📋 Next steps:"
echo "1. Clone your repository to /var/www/html"
echo "2. Copy nginx.conf to /etc/nginx/sites-available/celaloglu"
echo "3. Enable the site: sudo ln -s /etc/nginx/sites-available/celaloglu /etc/nginx/sites-enabled/"
echo "4. Update domain name in nginx config"
echo "5. Run: sudo nginx -t && sudo systemctl reload nginx"
echo "6. Get SSL certificate: sudo certbot --nginx -d your-domain.com"
echo ""
echo "🔑 MySQL credentials:"
echo "Database: celaloglu_insaat"
echo "Username: celaloglu_user"
echo "Password: secure_password_123"