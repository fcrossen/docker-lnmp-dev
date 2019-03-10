# docker-lnmp-dev
A docker project for LNMP development
This is a work in progress used for local web development only.
## Contents
- Alpine/Nginx
- PHP-FPM
- MySQL
## Getting started
Rename env-sample to .env and edit appropriately
run
```
docker-compose up
```
or
```
docker-compose up -d
```
for daemonised operation
## logs
```
docker logs -f dockerlnmpdev_php-fpm_1
```
## php.ini
```
./php-fpm/etc/php/
```
## Web and document root
```
./application
./application/html
```
## File permissions when running under linux
File permissions for ./application are shared between the container and the host
1. log into the php-fpm container
```
docker exec -it dockerlnmpdev_php-fpm_1 /bin/sh
```
2. check the user the php-fpm process is running as:
```
/var/www/html # ps aux
PID   USER     TIME  COMMAND
    1 root      0:00 php-fpm: master process (/usr/local/etc/php-fpm.conf)
    6 www-data  0:00 php-fpm: pool www
    7 www-data  0:00 php-fpm: pool www
    8 root      0:00 /bin/sh
   16 root      0:00 ps aux
```
3. Check the uid of the www-data user in the container:
```
/var/www/html # id www-data
uid=82(www-data) gid=82(www-data) groups=82(www-data),82(www-data)
```
4. From the host machine change the group of the application folder:
```
sudo chgrp -R 82 application/
[sudo] password for francis: 
```
Note that any files created in PHP will be owned by this user.
