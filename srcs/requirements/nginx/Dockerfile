FROM debian:bullseye

RUN apt update -y && apt upgrade -y && apt install nginx -y \
        && apt install nano -y && apt install curl -y

RUN mkdir /etc/nginx/ssl

RUN apt install openssl -y

RUN openssl req -x509 -nodes -days 365 \
    -subj "/C=BR/ST=SP/L=SP/O=42sp/CN=$DOMAIN_NAME/UID=$LOGIN_42" \
    -newkey rsa:2048 -keyout /etc/nginx/ssl/inception.key \
    -out /etc/nginx/ssl/inception.crt

RUN mkdir -p /var/run/nginx

COPY ./conf/nginx.conf /etc/nginx/nginx.conf

RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]