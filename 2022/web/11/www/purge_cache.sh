#!/bin/bash
cd /var/www/html/task/
rm -rf var/cache/prod/*
php bin/console cache:warmup
chmod 777 var/cache/prod -R
