#!/bin/bash

# Generate the application key
php artisan key:generate --force

# Run database migrations
php artisan migrate --force

# Seed the database
php artisan db:seed --force

# Start PHP-FPM
php-fpm -D

# Start Nginx
nginx -g 'daemon off;'
