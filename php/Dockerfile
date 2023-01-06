FROM php:8.0.24RC1-apache-buster

RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN pecl install xdebug-3.2.0RC1 && docker-php-ext-enable xdebug
RUN echo zend_extension=xdebug.so >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.mode=debug >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.client_host=host.docker.internal >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.start_with_request=yes >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini