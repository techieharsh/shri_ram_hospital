FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all project files into Apache document root
COPY . /var/www/html/

# Set proper directory and file permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && mkdir -p /var/www/html/data \
    && chmod -R 777 /var/www/html/data

# Use production PHP settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Configure DirectoryIndex to prefer index.php
RUN echo "DirectoryIndex index.php index.html" > /etc/apache2/mods-enabled/dir.conf

EXPOSE 80

CMD ["apache2-foreground"]
