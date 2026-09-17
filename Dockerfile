FROM php:8.4-apache

# System dependencies + PHP extensions Laravel needs
RUN apt-get update && apt-get install -y \
        git curl libcurl4-openssl-dev libpq-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
        libonig-dev libxml2-dev libzip-dev zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Apache: serve from Laravel's public/ folder, enable pretty URLs
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN a2enmod rewrite \
    && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Send Apache's logs to stdout/stderr so `docker logs` / Render's Logs tab
# actually shows them, instead of them being trapped in a file no one sees.
RUN ln -sf /dev/stdout /var/log/apache2/access.log \
    && ln -sf /dev/stderr /var/log/apache2/error.log

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts \
    && mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
