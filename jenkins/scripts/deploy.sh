#!/usr/bin/env sh

set -x
docker run -d -p 80:8000 --name my-apache-php-app -v /var/jenkins_home/3X03:/var/www/html php:7.2-apache
sleep 10
set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'

