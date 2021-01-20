#!/bin/bash

cd
sudo apt-get update
sudo apt install -y apt-transport-https ca-certificates curl gnupg2 software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo apt-key fingerprint 0EBFCD88
sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
sudo apt install -y docker-ce
curl -s https://api.github.com/repos/docker/compose/releases/latest \
  | grep browser_download_url \
  | grep docker-compose-Linux-x86_64 \
  | cut -d '"' -f 4 \
  | wget -qi -
chmod +x docker-compose-Linux-x86_64
sudo mv docker-compose-Linux-x86_64 /usr/local/bin/docker-compose

sudo systemctl status docker

sudo apt install -y nginx
systemctl status nginx
sudo apt-get install -y git
git clone https://github.com/mohamedaymenkarmous/nginx-config
sudo cp -R /etc/nginx /etc/nginx-$(date +%s).bak
sudo mkdir /etc/nginx/ssl
sudo openssl dhparam -out /etc/nginx/ssl/dhparam.pem 2048
sudo cp nginx-config/conf.d/ssl_settings.conf /etc/nginx/conf.d/
