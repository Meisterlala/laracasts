FROM php:8.3-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends curl libpq-dev \
    && docker-php-ext-install pdo_pgsql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY ./www /var/www/html/
