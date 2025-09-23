FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libwebp-dev \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/celaloglu celaloglu
RUN mkdir -p /home/celaloglu/.composer && \
    chown -R celaloglu:celaloglu /home/celaloglu

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=celaloglu:celaloglu . /var/www

# Change current user to celaloglu
USER celaloglu

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]