#!/bin/bash
username="$(whoami)"

composer install

mkdir public/img
mkdir public/smarty
mkdir public/smarty/cache
mkdir public/smarty/configs
mkdir public/smarty/templates_c

sudo chown -R "$username":"$username" public/img
sudo chmod -R 777 public/img

sudo chown -R "$username":"$username" public/smarty
sudo chmod -R 775 public/smarty
sudo chmod -R 777 public/smarty/configs
sudo chmod -R 777 public/smarty/templates_c