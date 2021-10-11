FROM php:7.4-cli
COPY . /polandia
WORKDIR /polandia
EXPOSE  8080
CMD [ "php", "index.php" ]