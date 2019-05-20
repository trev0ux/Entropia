FROM php:7.3.5-apache-stretch
COPY ./src /var/www/html
RUN docker-php-ext-install mysqli