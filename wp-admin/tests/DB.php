<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
$mshost = DB_HOST;
$msuser = DB_USER;		
$mspassword = DB_PASSWORD;	
$msname = DB_NAME;			
$table_tests ="tests";	//��� �������
$table_questions ="questions";	//��� �������
$table_results ="results";	//��� �������

//����������� � ������� ��
$msconnect = mysql_connect($mshost, $msuser, $mspassword) or die(mysql_error());

//���� ��� �� �� ������� ��
//mysql_query("CREATE DATABASE IF NOT EXISTS $msname CHARACTER SET utf8",$msconnect) or die(mysql_error());

//����� ��
mysql_select_db($msname,$msconnect) or die(mysql_error());
?>