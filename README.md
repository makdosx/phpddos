# phpddos

1) First disabled log files from apache <br>

find /etc/apache2/apache2.conf <br>

for error_log  <br>
and comment  #ErrorLog ${APACHE_LOG_DIR}/error.log <br>
after added  ErrorLog /dev/null <br> 

for acces log <br>

sudo a2disconf other-vhosts-access-log <br>

Restart apache gracefully:<br>
apache2ctl graceful <br> <br> 


Attention: if you do not follow the installation instructions properly and you omit to <br> 
comment on errror.log or disable the file other -vhosts-access-log then your hard drive <br>
will be full and the computer will not be able to load the operating system.<br>
Because the program is continuously refreshed for packet delivery, <br>
the errror.log and other-vhosts-log-log files are filled with information. <br><br>


![phpddos_disabled](phpddos_disabled.png) <br> <br> <br> 

![phpddos_enabled](phpddos_enabled.png) 
