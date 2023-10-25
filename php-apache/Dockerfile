FROM php:8.0.0-apache


# Use the default production configuration

COPY extra-ini.ini $PHP_INI_DIR/
RUN cat $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/extra-ini.ini > $PHP_INI_DIR/php.ini



RUN a2enmod rewrite
RUN a2enmod headers
RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN apt-get update && \
     apt-get install -y \
         libfreetype6-dev \
         libjpeg62-turbo-dev \
         libpng-dev \
         locales \
         libicu-dev \
         && docker-php-ext-install -j$(nproc) gd \
         && docker-php-ext-configure intl \
         && docker-php-ext-install intl

RUN apachectl restart

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo 'nl_NL.UTF-8 UTF-8' >> /etc/locale.gen && \
    locale-gen

# Change document root
ENV APACHE_DOCUMENT_ROOT /var/www/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
