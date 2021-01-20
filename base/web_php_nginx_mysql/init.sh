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

apt-key adv --keyserver keyserver.ubuntu.com --recv-keys F1656F24C74CD1D8
apt-get install -y software-properties-common
add-apt-repository 'deb [arch=amd64] http://mariadb.mirror.liquidtelecom.com/repo/10.4/debian buster main'
apt-get update
apt-get install -y mariadb-server mariadb-client

useradd -m -d /home/simple_user -s /bin/bash simple_user
chown -R simple_user:simple_user /var/www/html/task
mkdir -p /var/www/html/task
cd /var/www/html/task/
apt-get install -y nginx
