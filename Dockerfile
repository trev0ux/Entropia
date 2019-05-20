FROM php:7.3.5-apache-stretch
COPY ./src /var/www/html/entropia
RUN docker-php-ext-install mysqli