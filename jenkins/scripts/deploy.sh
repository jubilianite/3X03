#!/usr/bin/env sh

set -x

#docker run -d -p 80:8000 --name my-apache-php-app -v /var/jenkins_home/3X03:/var/www/html php:7.2-apache
sudo su root
cd /var/jenkins_home/3X03 && git pull
chmod +x jenkins/scripts/deploy.sh
chmod +x jenkins/scripts/kill.sh
cp /var/jenkins_home/3X03 /var/www/html
service apache2 start

sleep 1

set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'

