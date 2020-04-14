#FROM phpdockerio/php71-fpm

#RUN apt-get update \
#    && apt-get install -y iputils-ping \
#    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli
FROM php:7.3-fpm
RUN docker-php-ext-install pdo pdo_mysql mysqli \
    && pecl install redis-4.2.0 && docker-php-ext-enable redis
