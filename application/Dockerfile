FROM php:8.4-apache

USER root

RUN apt -y update
RUN apt -y install curl sudo vim libnss-wrapper git iputils-ping libicu-dev libonig5 libonig-dev libsodium23 libsodium-dev libxml2-dev libcurl4-openssl-dev libeditreadline-dev libzip5 libzip-dev nodejs npm libdbd-pg-perl postgresql-client libdbd-sqlite3-perl sqlite3 postgresql pgcli libpq-dev
RUN docker-php-ext-install bcmath curl exif fileinfo intl mbstring pcntl pdo pgsql sodium zip

RUN a2enmod rewrite

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

RUN composer global require laravel/installer

WORKDIR /var/www/html
RUN service apache2 restart
