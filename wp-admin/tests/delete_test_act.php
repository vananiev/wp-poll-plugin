<?php require('header.php');?>

<?php
	include "DB.php";
	
	$res = mysql_query("SELECT question FROM $table_tests WHERE id='{$_POST['testid']}'");
	$row=mysql_fetch_array($res);
	$ques = unserialize($row['question']);
	//удаляем из таблицы вопросов
	if($ques !=NULL){
		for($i=0;$i< count($ques);$i++)
			mysql_query("DELETE FROM $table_questions  WHERE id='{$ques[$i]}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	}
	//удаляем из таблицы теста
	$res = mysql_query("DELETE FROM $table_tests WHERE id='{$_POST['testid']}'");

	//удаляем из постов
	//получаем заголовок
		$res = mysql_query("SELECT post_title FROM wp_posts WHERE id='{$_POST['testid']}'");
		$row=mysql_fetch_array($res);
		$title = $row['post_title'];
	//ищем авто сохранения данной статьи
	$res = mysql_query("SELECT id FROM wp_posts WHERE post_title='{$title}'");
	for($i=0;$row=mysql_fetch_array($res);$i++){
		$delete_post_id= $row['id'];
		mysql_query("DELETE FROM wp_posts WHERE id='{$delete_post_id}'") or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		mysql_query("DELETE FROM wp_term_relationships WHERE object_id='{$delete_post_id}'") or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		}
?>

<script language="javascript">
	location.href="edit_test.php";
</script>


<?php require('footer.php'); ?>