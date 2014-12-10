#!/bin/bash

php app/console doctrine:database:drop --force
php app/console doctrine:database:create
php app/console doctrine:schema:create
php app/console doctrine:schema:update
php app/console fos:user:create admin admin@qa.int admin
php app/console fos:user:activate admin
php app/console fos:user:promote admin ROLE_DEVELOPER
php app/console cache:clear
