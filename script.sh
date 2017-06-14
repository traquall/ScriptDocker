#!/bin/bash

#parametres
title="titre_test"
admin="admin"
email="admin@admin.admin"
password="0000"
url="localhost"

DB_NAME="myDB"
DB_USER="root"
DB_PASS="0000"

#Creation container SQL et Apache2
sudo docker run --name mysql -e MYSQL_ROOT_PASSWORD=0000 -d mysql:latest
docker build -t my-apache2 .
docker run -dit --name my-running-app my-apache2

#récupération de l'ID
apacheImageID = 'echo docker images -q my-apache2'
sqlContainerID = 'echo sudo docker ps -aqf "name=mysql"'

#liaison des conteneurs
sudo docker run --name newContainer --link $sqlContainerID -d -p 4001:81 $apacheImageID

#installation WP
wp core download --locale=fr_FR --force --allow-root
wp core version --allow-root
wp core config --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --allow-root --skip-check --extra-php <<PHP
define( 'WP_DEBUG', true );
PHP
wp db create --allow-root
wp core install --url=$url --title=$title --admin_user=$admin --admin_email=$email --admin_password=$password --allow-root
