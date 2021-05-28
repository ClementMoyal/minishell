#!bin/sh/
mv /wordpress /var/www/html/
mv wp-config.php /var/www/html/wordpress/; rm -f latest.tar.gz
sed -i 's/127.0.0.1:9000/0.0.0.0:9000/g' /etc/php7/php-fpm.d/www.conf
supervisord
