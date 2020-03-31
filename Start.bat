@echo off
title=Start WNMP
mode con cols=50 lines=20&color 0a 

set base_path=%cd%
set nginx_path=%base_path%\nginx
set php7_path=%base_path%\php\php-7.2.25
set mysql_path=%base_path%\mySql

::echo Starting PHP5 FastCGI...
::RunHiddenConsole %php5_path%\php5-cgi.exe -b 127.0.0.1:9001 -c %php5_path%\php.ini

echo Starting PHP7 FastCGI...
%php7_path%\php-cgi.exe -b 127.0.0.1:9000 -c %php7_path%\php.ini

echo Starting Nginx...
%nginx_path%\nginx.exe -c %nginx_path%\conf\nginx.conf

echo Starting MySql...
%mysql_path%\bin\mysqld --defaults-file=%mysql_path%\my.ini --port=3306

echo openning http://127.0.0.1 ...
ping -n 3 127.0.0.1 > nul
start chrome  "dev.vitan.me"
exit