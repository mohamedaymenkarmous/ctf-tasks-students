#FROM web_php_nginx_mysql:latest
FROM debian:stable

MAINTAINER Empereur Paradis <paradie.aymen@gmail.com>

RUN apt-get update

WORKDIR /root/task
COPY ./init.sh .
COPY ./nginx ./nginx
COPY ./mysql ./mysql
COPY ./www /var/www/html/task
RUN chmod 740 /root/task/init.sh
RUN /root/task/init.sh
COPY ./start_services.sh .
RUN chmod 740 /root/task/start_services.sh

#ENTRYPOINT /root/task/init.sh
CMD [ "bash" ]

