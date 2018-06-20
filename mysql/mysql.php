<?php
define('HOST', 'localhost'); //Сервер базы
define('USER', 'root'); //Имя пользователя
define('PASS', ''); //Пароль базы
define('BASE', 'dmitrybd'); //База данных

mysql_connect(HOST, USER, PASS) or exit('Немогу подключиться к серверу');
mysql_select_db(BASE) or exit('Немогу подключиться к базе');
mysql_query("set names 'utf8'");
mysql_query("set charset 'utf8'");
mysql_query("set SESSION collation_connection = 'utf8_general_ci'");
?>