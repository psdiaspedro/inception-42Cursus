FROM debian:bullseye

RUN apt update && apt install -y nginx openssl 

RUN mkdir /etc/nginx/ssl

RUN openssl req -x509 -nodes -days 365 \
    -subj "/C=BR/ST=SP/O=42/CN=paugusto.42.fr" \
    -addext "subjectAltName=DNS:paugusto.42.fr" \
    -newkey rsa:2048 -keyout /etc/nginx/ssl/paugusto.key \
    -out /etc/nginx/ssl/paugusto.crt

COPY ./conf/nginx.conf /etc/nginx/conf.d

EXPOSE 443

STOPSIGNAL SIGQUIT

ENTRYPOINT ["nginx", "-g", "daemon off;"]