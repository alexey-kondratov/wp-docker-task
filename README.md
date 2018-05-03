### README.md
# Description 

This project represents the implementation of the application deployment on the Wordpress framework using the Docker philosophy based on Centos, Apache, MariaDB, PHP and Redis. The Redis database is used to save PHP sessions.

# Requirements 
On your workstation should be installed:
  - Docker
  - Docker-compose


# Install
In the main folder with the docker-compose.yml file, run the following commands:
```sh
$ docker-compose build
$ docker-compose up
```
After starting the containers, you can go to the browser at the address of the container, which you can see by running the command (for example "IPAddress": "172.23.0.4"):
```sh
$ docker inspect wp-app
```

# Features
PHP sessions are included by default in the WordPress template of the site, but you can check their functionality by clicking the link http: // <container_ip> /test-redis.php. After clicking on the link in the redis database is created a record of the current session. To check the entries, go to the redis database using redis-cli and run the command: 
```sh
<redis-cli> $ keys *
```
# Enviroment 
The main parameters of the environment are contained in the script ./.docker/db_access.sh. They are also written in the wp-config.php file in the root of the WordPress application.