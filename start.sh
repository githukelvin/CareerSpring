#!/bin/bash

# Generate the application key if not set
php artisan key:generate --force --show

# Run database migrations
php artisan migrate --force

# Start Apache in foreground
apache2-foreground
