FROM php:8.3-fpm

COPY ./public /var/www/html

WORKDIR /var/www/html