FROM php:8.2-apache

COPY . .

WORKDIR /

RUN a2enmod rewrite

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer 
    
RUN apt-get update && apt-get install -y \
    nano \
    unzip \
    libaio1 \
&& docker-php-ext-install pdo pdo_mysql
