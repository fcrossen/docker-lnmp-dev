ARG PHP_VERSION
ARG ALPINE_LINUX_VERSION

FROM php:${PHP_VERSION}-fpm-alpine${ALPINE_LINUX_VERSION}

RUN chgrp -R www-data /var/www
RUN chmod -R g+w /var/www
RUN chmod -R g+s /var/www

# RUN apk update && apk add --no-cache \
#     libcurl

# check https://wordpress.stackexchange.com/questions/42098/what-are-php-extensions-and-libraries-wp-needs-and-or-uses
RUN docker-php-ext-install \
    pdo_mysql \
    mysqli

ADD ./etc/php /usr/local/etc/php

CMD ["php-fpm"]

EXPOSE 9000

