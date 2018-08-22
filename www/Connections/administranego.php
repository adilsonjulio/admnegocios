<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_administranego = "mysql.administranegocios.com.br";
$database_administranego = "administranego";
$username_administranego = "administranego";
$password_administranego = "adm1234";
$administranego = mysql_pconnect($hostname_administranego, $username_administranego, $password_administranego) or trigger_error(mysql_error(),E_USER_ERROR); 
?>

