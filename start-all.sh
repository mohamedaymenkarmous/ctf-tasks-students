#!/bin/sh

for i in $(find [0-9]* -mindepth 2 -maxdepth 2 -type d);do
sudo ./${i}/start.sh
done
