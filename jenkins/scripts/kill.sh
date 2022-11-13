#!/usr/bin/env sh

set -x
#docker kill my-apache-php-app
#docker rm my-apache-php-app
service apache2 stop
rm /var/www/html/*
