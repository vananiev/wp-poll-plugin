<?php require('header.php'); ?>
<?php
	include "DB.php";
	//
	$code = $_POST['code'];

	//mysql_query("INSERT INTO $table_results (id,result) VALUES('{$_GET['testid']}','{$code}')", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	//добавляем в тест обработку результатов
	//$resid = mysql_insert_id();
	mysql_query("UPDATE $table_tests SET result = '{$code}' WHERE id = '{$_GET['testid']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
?>
Тест добавлен<br>
<a href="edit_test.php?testid=<?php echo $_GET['testid']; ?>>Вернуться</a>
<?php require('footer.php'); ?>