<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
$mshost = DB_HOST;
$msuser = DB_USER;		
$mspassword = DB_PASSWORD;	
$msname = DB_NAME;			
$table_tests ="tests";	//имя таблицы
$table_questions ="questions";	//имя таблицы
$table_results ="results";	//имя таблицы

//подключение к серверу БД
$msconnect = mysql_connect($mshost, $msuser, $mspassword) or die(mysql_error());

//если нет БД то создаем ее
//mysql_query("CREATE DATABASE IF NOT EXISTS $msname CHARACTER SET utf8",$msconnect) or die(mysql_error());

//выбор БД
mysql_select_db($msname,$msconnect) or die(mysql_error());
?>