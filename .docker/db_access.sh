#/bin/bash
sleep 3
mysql -e 'CREATE DATABASE `database-wordpress`;'
mysql -e "CREATE USER 'user-wordpress'@'%' IDENTIFIED BY 'EHeGecnMJjgw39qy';"
mysql -e "GRANT ALL ON *.* TO 'user-wordpress'@'%';"