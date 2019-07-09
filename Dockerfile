FROM php:7.3-apache
LABEL maintainer=lorenzo.dalrio@eng.it
RUN sed -i 's/Listen 80/Listen 8080/1' /etc/apache2/ports.conf
EXPOSE 8080
COPY index.php image001.png /var/www/html/
USER www-data