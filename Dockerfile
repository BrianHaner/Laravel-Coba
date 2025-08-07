FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    zip \
    sqlite3 \
    libsqlite3-dev \
    libicu-dev \
    git \
    curl \
    && docker-php-ext-install pdo pdo_sqlite zip intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
