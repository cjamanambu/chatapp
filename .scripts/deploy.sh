#!/bin/bash
set -e

echo 'Deployment started...'

# Enter maintenance mode or return true
# if already is in maintenance mode
echo 'Entering maintenance mode...'
(php artisan down) || true

# Pull the latest version of the app
echo 'Pulling latest code version...'
git pull origin main

# set up node environment
npm install

# build assets
npm run build

# Install composer dependencies
echo 'Installing dependencies...'
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
echo 'Clear the old cache...'
php artisan clear-compiled

# Recreate cache
echo 'Optimize...'
php artisan optimize

# Compile npm assets
#npm run prod

# Run database migrations
echo 'migrate db...'
php artisan migrate --force

# Exit maintenance mode
echo 'Exiting maintenance mode...'
php artisan up

echo "Deployment finished!"
