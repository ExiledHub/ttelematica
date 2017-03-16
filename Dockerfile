FROM php:7.0-apache

RUN apt-get -y update && apt-get -y upgrade && apt-get install -y wget unzip vim tree git

#Installing mysqli for php
RUN docker-php-ext-install mysqli

#Adding fuelphp framework
RUN wget http://fuelphp.com/files/download/36
RUN unzip 36 -d /var/www/
RUN mkdir /var/www/ttelematica
RUN cp -rf /var/www/fuelphp-1.8/* /var/www/ttelematica/

#Adding bookstore application
RUN git clone https://github.com/Juanmam/ttelematica.git
RUN cp -rf ttelematica/* /var/www/ttelematica

#Giving ownership of application files to the apache user
RUN chown -R www-data:www-data /var/www/ttelematica

