#!/bin/bash
id=10
task=demo${id}
sudo docker start $task
sudo docker exec --user root $task /home/task/task/start_services.sh
