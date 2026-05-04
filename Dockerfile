FROM php:8.2-apache


RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

WORKDIR /var/www/html
COPY . /var/www/html/


RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs


RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \; \
    && chmod -R 775 /var/www/html/application/config \
    && chmod -R 775 /var/www/html/application/logs \
    && chmod -R 775 /var/www/html/assets
