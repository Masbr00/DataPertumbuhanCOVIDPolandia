FROM php:8.0-apache
COPY ./php/src /var/www/html/
WORKDIR /polandia
# EXPOSE  8080
# CMD [ "php", "index.php", "semuaData.php" ]