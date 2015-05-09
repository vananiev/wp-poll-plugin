<?php require('private.php'); ?>
<?php

include "DB.php";

//создаем тавлицу вопросов
mysql_query("CREATE TABLE $table_questions ( 
	id int(10) unsigned NOT NULL auto_increment,
	question varchar(1024),
	ans varchar(1024),
	OneOrFew varchar(128),
	variables varchar(128),
	opcode varchar(128),
	operand varchar(512),
	PRIMARY KEY  (`ID`)
	) CHARSET=utf8",$msconnect);// or die(mysql_error()); 

//создаем тавлицу вопросов
mysql_query("CREATE TABLE $table_tests ( 
	id int(10) unsigned NOT NULL,
	question varchar (1024),
	result text
	) CHARSET=utf8",$msconnect);// or die(mysql_error()); 

echo "Make ok<br>";
mysql_close($msconnect);
?>
