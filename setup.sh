#!/bin/bash

cd /host
if [ ! -f composer.phar ]; then
    curl -sS https://getcomposer.org/installer | php
fi
php composer.phar install
rm -rf /var/www/html
ln -s /root/web /var/www/html