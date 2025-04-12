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

# Copy code
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set Laravel public folder as document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache config to use new document root everywhere
RUN sed -ri -e "s|/var/www/html|${APACHE_DOCUMENT_ROOT}|g" /etc/apache2/sites-available/*.conf /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Create storage link
RUN php artisan storage:link

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache public

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]