FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server
COPY tools /
COPY conf /

CMD ["sh", "script.sh"]
