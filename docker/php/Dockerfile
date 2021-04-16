FROM php:7.3-apache

# Tools
RUN apt-get update;
RUN apt-get install -y curl;
RUN apt-get install -y default-mysql-client;
RUN apt-get install -y git;
RUN apt-get install -y gzip;
RUN apt-get install -y vim;
RUN apt-get install -y wget;
RUN apt-get install -y zip;

# MySQLi
RUN docker-php-ext-install mysqli;

# Opcache
RUN docker-php-ext-install opcache
COPY conf.d/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Mods
RUN a2enmod rewrite

# Install WPUTools
RUN mkdir /home/tools && \
   cd /home/tools && \
   git clone --recursive -j8 https://github.com/WordPressUtilities/wputools && \
   /bin/bash wputools/wputools.sh self-update
