#!/bin/sh
mysql_install_db --ldata=/var/lib/mysql
sleep 5
mysqld & sleep 5
mysql -u root < mysql_setup.sql
mysql wordpress -u root < wordpress.sql
mysql wordpress -u root < users.sql
/usr/share/mariadb/mysql.server stop

supervisord
