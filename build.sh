#!/usr/bin/env bash
# exit on error
set -o errexit

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate app key
php artisan key:generate --force

# Create SQLite database if it doesn't exist
touch database/database.sqlite

# Cache config (after creating DB file)
php artisan config:cache

# Cache views
php artisan view:cache

# Run migrations
php artisan migrate --force
