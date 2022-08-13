#!/bin/bash
set -e

echo "Deployment script started"

# Laravel - Initiate Maintenance mode (return true if already in maintenance mode)
(php artisan down --message="Maintenance mode") || true

# Pull latest changes from remote repository
git pull

# Install/update composer dependencies
composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader

# Clear and Recreate cache
php artisan clear-compiled
php artisan optimize

# Compile webpack assets
npm run prod

# Run database migrations
php artisan migrate --force

# Exit Maintenance mode
php artisan up

echo "Deployment script finished"