#!/bin/bash
id=2
task=2020web${id}
sudo docker start $task
sudo docker exec $task /root/task/start_services.sh
