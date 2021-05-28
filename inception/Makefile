NAME = inception

NGINX_IMG = nginx_img

NGINX_PATH = ./nginx/

MYSQL_IMG = mysql_img

MYSQL_PATH = ./mysql/

WORDPRESS_IMG = wordpress_img

WORDPRESS_PATH = ./wordpress/

BUILD = docker build -t

all:		${NAME}

${NAME}:	
	docker build -t ${NGINX_IMG} ${NGINX_PATH}
		${BUILD} ${MYSQL_IMG} ${MYSQL_PATH}
		${BUILD} ${WORDPRESS_IMG} ${WORDPRESS_PATH}
		docker-compose up
			
build:
	docker build -t ${NGINX_IMG} ${NGINX_PATH}
#echo "user42" | sudo usermod -aG docker user42
