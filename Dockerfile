FROM php:8.1-apache

# Copia os arquivos do projeto
COPY . /var/www/html/

# Dá permissão de escrita ao Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80