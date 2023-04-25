#!/bin/bash
apt-get update
apt-get install apt-transport-https lsb-release ca-certificates wget curl nano -y
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
cat /etc/apt/sources.list.d/php.list || (
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg &&
  echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list.d/php.list
)
apt-get update
apt-get install -y php7.1 php7.1-mysql php7.1-fpm

apt-get install -y gnupg
#apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv EA312927
#echo "deb http://repo.mongodb.org/apt/ubuntu trusty/mongodb-org/3.2 multiverse" | tee /etc/apt/sources.list.d/mongodb-org-3.2.list
wget -qO - https://www.mongodb.org/static/pgp/server-4.2.asc | apt-key add -
echo "deb http://repo.mongodb.org/apt/debian buster/mongodb-org/4.2 main" | tee /etc/apt/sources.list.d/mongodb-org-4.2.list
apt-get update
apt-get install -y mongodb-org
systemctl enable mongod.service
wget -O /etc/init.d/mongod https://raw.githubusercontent.com/mongodb/mongo/master/debian/init.d
chmod +x /etc/init.d/mongod
sudo chown mongodb -R /var/log/mongodb/ && sudo chown mongodb -R /var/run/mongod.pid && sudo chown mongodb -R /var/lib/mongodb/
service mongod start
cd /var/www/html/task
apt-get install -y php-mongodb git zip
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
composer require mongodb/mongodb:1.6.1
php setup.php
rm setup.php

useradd -m -d /home/simple_user -s /bin/bash simple_user
chown -R simple_user:simple_user /var/www/html/task
apt-get install -y nginx
cp /home/task/task/nginx/default /etc/nginx/sites-available/default
