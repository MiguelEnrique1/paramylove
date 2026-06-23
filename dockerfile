# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Copia todos los archivos del proyecto al servidor web
COPY . /var/www/html/

# Expone el puerto que Render usará
EXPOSE 10000

# Inicia Apache
CMD ["apache2-foreground"]
