FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install openssl

COPY tools /
COPY conf /

RUN sh script.sh

CMD nginx -g 'daemon off;'
