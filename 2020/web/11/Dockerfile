#FROM web_php_nginx_mysql:latest
FROM debian:stable

MAINTAINER Empereur Paradis <paradie.aymen@gmail.com>

RUN apt-get update

RUN groupadd -r task && useradd --create-home -d /home/task/ -s /bin/bash -m -r -g task task
USER root

WORKDIR /home/task/task
COPY ./init.sh .
COPY ./nginx ./nginx
COPY ./www /var/www/html/task
RUN chmod 740 /home/task/task/init.sh
RUN /home/task/task/init.sh
RUN chown task:task /home/task -R
COPY ./start_services.sh .
RUN chmod 740 /home/task/task/start_services.sh

USER task

#ENTRYPOINT /root/task/init.sh
CMD [ "bash" ]

