#!/usr/bin/env sh

set -x
docker run -d -p 80:8000 --ip 172.18.0.4 --name my-apache-php-app -v /var/jenkins_home/3X03:/var/www/html php:7.2-apache
docker exec -it --user root my-apache-php-app apt-get update
docker exec -it --user root my-apache-php-app apt-get upgrade
docker exec -it --user root my-apache-php-app apt install net-utils
docker exec -it --user root my-apache-php-app apt install net-tools
docker exec -it --user root my-apache-php-app apt install iputils-ping
sleep 1
set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'

