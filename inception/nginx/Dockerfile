FROM alpine:latest

#install des apk
RUN apk update
RUN apk add nginx 
RUN apk add openssh openssl 
RUN apk add openrc supervisor --no-cache
RUN openrc; touch /run/openrc/softlevel
RUN rc-update add sshd

#Création du user utilisé par le serveur
RUN adduser -D -g 'www' www

#setup server files & permissions
RUN mkdir -p /var/www/html
RUN chown -R www:www /var/www/html
RUN chmod 775 /var/www/html

RUN mkdir /run/nginx
RUN chown -R nginx:nginx /run/nginx
RUN chmod 775 /run/nginx

#config files
RUN rm /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx/nginx.conf
#COPY index.html /var/www/localhost/html/
RUN rm /etc/nginx/conf.d/default.conf
RUN cp /etc/nginx/nginx.conf /etc/nginx/conf.d/
#create ssl
RUN mkdir /etc/ssl/certs/example.com/
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=FR/ST=75/L=Paris/O=42/CN=cmoyal' -keyout /etc/ssl/certs/example.com/localhost.key -out /etc/ssl/certs/example.com/localhost.crt
COPY index.html /var/www/html/

COPY ./supervisord.conf /etc/supervisord.conf
COPY nginx.sh ./nginx.sh

EXPOSE 80 443

CMD sh ./nginx.sh
