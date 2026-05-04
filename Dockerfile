FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN a2enmod rewrite


WORKDIR /var/www/html


COPY . /var/www/html/


RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
