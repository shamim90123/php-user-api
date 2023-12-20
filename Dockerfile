# Use the official PHP image as the base image
FROM php:7.4-apache

# WORKDIR /var/www/html

# RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


# Copy your PHP file into the container
COPY . /var/www/html/

# Expose port 80 for Apache
EXPOSE 80