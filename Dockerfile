FROM php:7.4-apache
# Instalar extensões necessárias para o MapOS
RUN apt-get update && apt-get install -y \
libpng-dev \
libjpeg-dev \
libfreetype6-dev \
zip \
unzip \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install gd mysqli pdo pdo_mysql
# Habilitar mod_rewrite do Apache
RUN a2enmod rewrite
# Copiar os arquivos da aplicação
COPY . /var/www/html/
# Ajustar permissões
RUN chown -R www-data:www-data /var/www/html \
&& chmod -R 755 /var/www/html
