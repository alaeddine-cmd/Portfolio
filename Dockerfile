FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy app source
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Link storage after files are present
RUN php artisan storage:link

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache public/storage && \
    chmod -R 775 storage bootstrap/cache public/storage

# Set Laravel public folder as Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache virtual host config to use Laravel's public folder
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Add custom Laravel-specific Apache config
COPY laravel.conf /etc/apache2/conf-available/laravel.conf
RUN a2enconf laravel

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
