#!/bin/bash
id=8
task=demo${id}
sudo docker start $task
sudo docker exec --user root $task /home/task/task/start_services.sh
