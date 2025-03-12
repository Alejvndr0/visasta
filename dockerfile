FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www

COPY . .

RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

CMD bash -c "until pg_isready -h $DB_HOST -p $DB_PORT -U $DB_USERNAME -d $DB_DATABASE; do echo 'Esperando a PostgreSQL...'; sleep 2; done; php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"