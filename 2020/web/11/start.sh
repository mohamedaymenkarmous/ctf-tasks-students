#!/bin/bash
id=11
task=2020web${id}
sudo docker start $task
sudo docker exec --user root $task /home/task/task/start_services.sh
