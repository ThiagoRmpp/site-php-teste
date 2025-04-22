FROM php:8.1-apache

# Cria uma pasta com permissão de escrita
RUN mkdir -p /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

# Copia os arquivos do projeto
COPY . /var/www/html/

EXPOSE 80