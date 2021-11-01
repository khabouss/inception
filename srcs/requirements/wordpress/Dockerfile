FROM debian:buster

RUN apt-get update
RUN apt-get install -y wget php7.3-fpm php-mysql

COPY tools /
COPY conf /

RUN sh script.sh
CMD sh run_srv.sh
