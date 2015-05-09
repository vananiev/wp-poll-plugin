<?php require('header.php'); ?><?php
	include "make_DB_table.php";
	include "DB.php";
	//
	if (isset($_POST['name']) && isset($_POST['kat']) && isset($_POST['description']) && isset($_POST['result']))
	{
	$name = mysql_real_escape_string($_POST['name']);
	$kat = mysql_real_escape_string($_POST['kat']);
	$description = mysql_real_escape_string($_POST['description']);
	$result = $_POST['result'];

	$description=str_replace("\\\\\\\"", "\"",$description);
	echo $description;
	
	//добавляем пост
	mysql_query("UPDATE wp_posts SET post_content='{$description}', post_title='{$name}' WHERE id='{$_GET['testid']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	
	//добавляем пост в выбранную категорию
	mysql_query("UPDATE wp_term_relationships SET term_taxonomy_id='{$kat}' WHERE object_id={$_GET['testid']}", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());

	//добавляем тест
	mysql_query("UPDATE $table_tests SET result = '{$result}' WHERE id='{$_GET['testid']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	?>
	<script language="javascript">
		location.href="edit_test.php?testid=<?php echo $_GET['testid']; ?>";
	</script>
	<?php
	}
	else
		echo "Заполните все поля.";
?>

<?php require('footer.php'); ?>