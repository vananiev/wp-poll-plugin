<?php require('private.php'); ?>
<?php
include "DB.php";
//удаляем тавлицы 
mysql_query("DROP TABLE $table_questions",$msconnect) or die(mysql_error()); 
mysql_query("DROP TABLE $table_tests",$msconnect) or die(mysql_error()); 

echo "Delete ok";

mysql_close($msconnect);
?>