FROM debian:buster

RUN apt update

RUN apt install openssl -y

RUN openssl req -x509 -nodes -days 365 -subj \
	"/C=BR/ST=PR/O=42/CN=paugusto.42.fr" -addext \
	"subjectAltName=DNS:paugusto.42.fr" -newkey rsa:2048 \
	-keyout /etc/ssl/private/nginx-selfsigned.key -out \
	/etc/ssl/certs/nginx-selfsigned.crt

RUN apt install nginx -y

COPY ./config/hello.html /var/www/localhost/htdocs

COPY ./config/nginx.conf /etc/nginx

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]