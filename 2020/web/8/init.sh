#!/bin/bash
apt-get update
apt-get install apt-transport-https lsb-release ca-certificates wget curl nano -y

useradd -m -d /home/simple_user -s /bin/bash simple_user
chown -R simple_user:simple_user /var/www/html/task
apt-get install -y nginx
cp /root/task/nginx/default /etc/nginx/sites-available/default
