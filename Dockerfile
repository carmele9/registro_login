FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
COPY ./php/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html