ARG PHP_VERSION

FROM php:${PHP_VERSION}-fpm-alpine

RUN docker-php-ext-install pdo_mysql

CMD ["php-fpm"]

EXPOSE 9000

