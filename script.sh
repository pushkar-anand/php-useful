#!/usr/bin/env bash

#configure & install
pwd
php -v
composer self-update
composer install --no-interaction --prefer-source
mysql -u root -e 'CREATE DATABASE IF NOT EXISTS test;'
mysql -u root -e "CREATE USER 'test'@'localhost' IDENTIFIED BY 'Qlu1VsT#5Y8ZlG9^';"
mysql -u root -e "GRANT ALL PRIVILEGES ON test.* TO 'test'@'localhost';"
mysql -u root test < db.sql



#test
./vendor/bin/phpunit