CREATE DATABASE wordpress;
CREATE USER 'admin'@'%' IDENTIFIED BY 'password';
GRANT ALL ON *.* TO 'admin'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
GRANT ALL ON *.* TO 'admin'@'127.0.0.1' IDENTIFIED BY 'password' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
FLUSH PRIVILEGES;
