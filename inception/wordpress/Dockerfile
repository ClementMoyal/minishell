FROM alpine:latest

COPY wp-config.php ./

RUN apk update
RUN apk add --no-cache php7-fpm php7-mbstring php7-session php7-mcrypt php7-soap php7-openssl php7-gmp php7-pdo_odbc php7-json php7-dom php7-pdo php7-zip php7-mysqli php7-sqlite3 php7-apcu php7-pdo_pgsql php7-bcmath php7-gd php7-odbc php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader php7-xmlrpc php7-bz2 php7-iconv php7-pdo_dblib php7-curl php7-ctype
RUN apk add openrc supervisor --no-cache
RUN openrc; touch /run/openrc/softlevel

RUN adduser -D -g 'www' www

RUN mkdir -p /var/www/html
#download and install wordpress
ADD https://wordpress.org/latest.tar.gz ./
RUN tar -xvf latest.tar.gz
#nginx
#install and param telegraf
COPY supervisord.conf /etc/


EXPOSE 9000

COPY wp.sh ./

CMD sh wp.sh

