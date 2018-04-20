#! /bin/bash

#addd repo

wget https://www.dotdeb.org/dotdeb.gpg
apt-key add dotdeb.gpg
#sudo -s
echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
echo weeeeee
apt update
apt install php7.0 php7.0-mysql php7.0-cli php7.0-common php7.0-curl php7.0-opcache php7.0-json

# install composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
