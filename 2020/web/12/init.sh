#!/bin/bash
apt-get update
apt-get install apt-transport-https lsb-release ca-certificates wget curl nano apt-utils -y
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
cat /etc/apt/sources.list.d/php.list || (
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg &&
  echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list.d/php.list
)
apt-get update
apt-get install -y php7.1 php7.1-opcache libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json php7.1-gd php7.1-mcrypt php7.1-intl php7.1-mbstring php7.1-xml php7.1-zip php7.1-fpm php7.1-readline
#apt-get install -y php7.1-opcache libapache2-mod-php7.1 php7.1-curl php7.1-json php7.1-gd php7.1-mcrypt php7.1-intl php7.1-mbstring php7.1-xml php7.1-zip php7.1-readline
wget https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -O - -q | php -- --quiet
mv composer.phar /usr/local/bin/composer
curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
chmod a+x /usr/local/bin/symfony
#apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xF1656F24C74CD1D8
#apt-get install -y software-properties-common
#add-apt-repository 'deb [arch=amd64] http://mariadb.mirror.liquidtelecom.com/repo/10.4/debian buster main'
#apt-get update
#apt-get install -y mariadb-server mariadb-client
#service mysql start
#mysql -e 'CREATE DATABASE symfony_task;'
#mysql -e 'CREATE USER  "symfony_admin"@"localhost" IDENTIFIED BY "Securinets{D4taB4se_P4sSw0Rd_My5qL_St0L3n}"'
#mysql -e 'GRANT SELECT ON symfony_task.* TO "symfony_admin"@"localhost";'
#mysql -e 'FLUSH PRIVILEGES;'
useradd -m -d /home/simple_user -s /bin/bash simple_user
chown -R simple_user:simple_user /var/www/html/task
rm -rf /var/www/html/task/var/cache/prod/*
rm -rf /var/www/html/task/var/log/*
chmod 777 /var/www/html/task/var/*
cd /var/www/html/task/
composer install
php bin/console cache:warmup
apt-get install -y nginx
cp /root/task/nginx/default /etc/nginx/sites-available/default
apt-get install -y cron
(crontab -u simple_user -l 2>/dev/null; echo "*/30 * * * * /var/www/html/task/purge_cache.sh") | crontab -u simple_user -
cat > /var/www/html/task/purge_cache.sh <<EOF
#!/bin/bash
cd /var/www/html/task/
rm -rf var/cache/dev/*
php bin/console cache:warmup
chmod 777 var/cache/dev -R
EOF
chmod 740 /var/www/html/task/purge_cache.sh
chown simple_user:simple_user /var/www/html/task/purge_cache.sh

