<?php require('header.php'); ?>
<?php
	include "make_DB_table.php";
	include "DB.php";
	//
	if (isset($_POST['name']) && isset($_POST['kat']) && isset($_POST['description']))
	{
	$name = mysql_real_escape_string($_POST['name']);
	$kat = mysql_real_escape_string($_POST['kat']);
	$description = mysql_real_escape_string($_POST['description']);

	
	//добавляем пост
	$tmr = date("Y-m-d h:i:s");
	mysql_query("INSERT INTO wp_posts (post_date,post_date_gmt,post_modified,post_modified_gmt,post_content,post_excerpt,post_title,to_ping,pinged,post_content_filtered) VALUES('{$tmr}','{$tmr}','{$tmr}','{$tmr}','','','{$name}','','','')", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	$post_id = mysql_insert_id();
	$description .= "\r\n<p><div id=\"enter_in_test\"><a href=\"test.php?id=$post_id\">Пройти тест</a></div></p>";
	mysql_query("UPDATE wp_posts SET post_content='{$description}' WHERE id = '{$post_id}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	
	//добавляем пост в выбранную категорию
	mysql_query("INSERT INTO wp_term_relationships (object_id,term_taxonomy_id)  VALUE('{$post_id}','{$kat}')", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());

	//добавляем тест
	$testid = $post_id;
	mysql_query("INSERT INTO $table_tests (id) VALUES($testid)", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	?>
	<script language="javascript">
		location.href="add_question.php?testid=<?php echo $testid; ?>";
	</script>
	<?php
	}
	else
		echo "Заполните все поля.";
?>

<?php require('footer.php'); ?>