FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache modules and configure symlink permissions
RUN a2enmod rewrite && \
    echo -e "\n<Directory /var/www/html/public>\n\tOptions Indexes FollowSymLinks\n\tAllowOverride All\n\tRequire all granted\n</Directory>" >> /etc/apache2/apache2.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

# Copy all files except those in .dockerignore
COPY . .

# Install dependencies (optimized for production)
RUN composer install --no-dev --optimize-autoloader

# Create storage structure and set permissions
RUN mkdir -p storage/app/public && \
    chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

# Explicitly copy storage contents (critical for existing files)
COPY storage/app/public/ storage/app/public/

# Create symlink and verify
RUN php artisan storage:link && \
    ls -la public/storage && \
    ls -la storage/app/public

# Update Apache document root globally
RUN sed -ri -e "s|/var/www/html|/var/www/html/public|g" /etc/apache2/sites-available/*.conf /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 80
CMD ["apache2-foreground"]