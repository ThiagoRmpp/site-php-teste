FROM php:8.1-apache

# Cria pasta e define permissões
RUN mkdir -p /var/www/html/storage \
    && touch /var/www/html/storage/contatos.txt \
    && chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

COPY . /var/www/html/

EXPOSE 80