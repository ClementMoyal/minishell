#!/bin/sh

mysql_install_db --ldata=/var/lib/mysql
sleep 5
mysqld --default-authentication-plugin=mysql_native_password &
sleep 5
#mysqld
tmpsql="/tmp/init_sql"
echo > $tmpsql \
"CREATE DATABASE IF NOT EXISTS 'wordpress';
CREATE USER IF NOT EXISTS 'admin' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'%';
FLUSH PRIVILEGES;
GRANT ALL ON *.* TO 'admin'@'127.0.0.1' IDENTIFIED BY 'password' WITH GRANT OPTION;
GRANT ALL ON *.* TO 'admin'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
FLUSH PRIVILEGES;"

if [ ! -f /var/lib/mysql/wpNewUsers ]; then
	echo "done" >> /var/lib/mysql/wpNewUsers
	mysql -h localhost -e "$(cat $tmpsql)"
	mysql wordpress -u root < wordpress.sql
	mysql wordpress -u root < users.sql
fi

rm -f $tmpsql

/usr/share/mariadb/mysql.server stop

supervisord
