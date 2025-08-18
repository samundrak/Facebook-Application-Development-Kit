FROM php:5.6-apache

# Install PHP extensions
RUN sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list     && sed -i 's|security.debian.org|archive.debian.org|g' /etc/apt/sources.list     && sed -i '/stretch-updates/d' /etc/apt/sources.list     && apt-get update && apt-get install -y --allow-unauthenticated     libpng-dev     libjpeg-dev     libfreetype6-dev     libmcrypt-dev     && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/     && docker-php-ext-install gd     && docker-php-ext-install mcrypt

# Enable Apache rewrite module
RUN a2enmod rewrite
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Copy application files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 777 /var/www/html/templates_c
RUN chmod -R 777 /var/www/html/__tmp

