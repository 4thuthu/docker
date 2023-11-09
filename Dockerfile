FROM php:7.4-apache
RUN apt-get update && apt-get install inetutils-ping dnsutils -y
RUN mkdir /secret
COPY secret.txt /secret/pass.txt

WORKDIR /var/www/html
COPY ping.php index.php

EXPOSE 80
