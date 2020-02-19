@echo off
title=Stop WNMP
mode con cols=50 lines=20&color 0a 
echo Stopping Nginx...
taskkill /F /IM nginx.exe > nul
echo Stopping PHP FastCGI...
taskkill /F /IM php-cgi.exe > nul
echo Stopping Mysql...
taskkill /F /IM mysqld.exe > nul
echo Stop all success! 3 seconds later will be close!
ping -n 3 127.0.0.1 > nul
exit