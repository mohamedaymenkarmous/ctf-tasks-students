#!/bin/bash
id=9
task=demo${id}
sudo docker start $task
sudo docker exec $task /root/task/start_services.sh
