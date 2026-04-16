FROM php:8.2-apache

# Install MySQL support
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy all project files
COPY . /var/www/html/

# Set permissions (important sometimes)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80