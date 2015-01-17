#!/bin/bash

cd /host
if [ ! -f composer.phar ]; then
    curl -sS https://getcomposer.org/installer | php
fi
php composer.phar install
rm -rf /var/www/html
ln -s /host/web /var/www/html

echo "Options FollowSymLinks" > /etc/apache2/conf-enabled/enable-symlinks.conf
sudo service apache2 restart

sudo chmod -R a+rwx app/logs app/cache
sudo chmod a+x app/console

sudo app/console startplatz:wordpress-integration:build-global-names-cache
