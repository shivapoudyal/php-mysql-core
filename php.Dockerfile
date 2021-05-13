FROM php:7.2-fpm
RUN docker-php-ext-install mysql
WORKDIR /phpprojects
COPY ./ ./
