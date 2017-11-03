FROM centos:centos7.2.1511
MAINTAINER yogesh  yogesh@ymclinux.com

ENV code_root /code
ENV httpd_conf ${code_root}/httpd.conf 

RUN yum install -y epel-release
RUN yum install -y httpd
RUN yum install --enablerepo=epel -y  php php-mysqlnd 

ADD ./php /var/www/html/php/
ADD . ${code_root}
RUN test -e $httpd_conf && echo "Include $httpd_conf" >> /etc/httpd/conf/httpd.conf 

EXPOSE 80
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]

