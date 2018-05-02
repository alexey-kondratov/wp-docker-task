FROM centos
EXPOSE 80
### Install epel release
RUN yum update -y && yum install -y epel-release
# Add Remi repo
RUN rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
    rpm -Uvh http://repo.mysql.com/mysql-community-release-el7-7.noarch.rpm

# Install PHP 7.2
RUN yum --enablerepo=remi-php72 install -y php php-mysql php-xml php-soap php-xmlrpc php-mbstring php-json php-gd php-mcrypt && \
    yum install -y mysql

ADD app /var/www/html
ADD config /

RUN chown -R apache:apache /var/www/html

ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]
