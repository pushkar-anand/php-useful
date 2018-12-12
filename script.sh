#!/usr/bin/env bash

#configure
pwd
php -v
composer self-update
composer install --no-interaction --prefer-source


#test
./vendor/bin/phpunit