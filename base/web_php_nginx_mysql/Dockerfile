FROM debian:stable

MAINTAINER Empereur Paradis <paradie.aymen@gmail.com>

RUN apt-get update

WORKDIR /root/task
COPY ./init.sh .
RUN chmod 740 /root/task/init.sh
RUN /root/task/init.sh

#ENTRYPOINT /root/task/init.sh
CMD [ "bash" ]

