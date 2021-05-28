FROM alpine:latest

COPY wordpress.sql mysql_setup.sql users.sql ./

RUN apk update
RUN apk add --no-cache mariadb mariadb-common mariadb-client supervisor

COPY my.cnf /etc/my.cnf.d/mariadb-server.cnf
RUN cp /etc/my.cnf.d/mariadb-server.cnf /etc/my.cnf
#RUN rmdir /var/lib/mysql/
RUN mkdir -p /var/log/supervisor/

EXPOSE 3306
COPY ./supervisord.conf/ /etc/supervisord.conf
COPY mysql.sh ./

CMD sh mysql.sh

