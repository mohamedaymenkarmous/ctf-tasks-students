#!/bin/bash
id=11
task=demo${id}
sudo docker start $task
sudo docker exec $task /root/task/start_services.sh
