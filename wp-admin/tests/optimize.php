<?php require('private.php'); ?>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');
require_once('DB.php');


?>

<?php
	//оптимизация тестов (если нет записей в постах, то удаляем)
		$res3 = mysql_query("SELECT id FROM $table_tests", $msconnect)or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		//этап 1 поиск используемых вопросов
		for($i=0;$row3 = mysql_fetch_array($res3);$i++){
			$res2=mysql_query("SELECT COUNT(*) FROM wp_posts WHERE id='{$row3['id']}'", $msconnect)or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
			$row2=mysql_fetch_row($res2);
			$cnt=$row2[0];
			if($cnt == 0){
				mysql_query("DELETE FROM $table_tests WHERE id='{$row3['id']}'", $msconnect)or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
				echo "Удален не используемый тест: ".$row3['id']."<br>";
				}
			}

	//оптимизация вопросов
		$res3 = mysql_query("SELECT * FROM $table_tests", $msconnect)or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		$questions =Array();
		//этап 1 поиск используемых вопросов
		for($i=0;$row3 = mysql_fetch_array($res3);$i++){
			$ques = unserialize($row3['question']);
			for($j=0;$j<count($ques);$j++)
				array_push($questions, $ques[$j]);
			}
		//этап 2. Очистка
		$res = mysql_query("SELECT id FROM $table_questions ", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		for($i=0;$row = mysql_fetch_array($res);$i++){
			if(!in_array($row['id'],$questions)){
				mysql_query("DELETE FROM $table_questions WHERE id='{$row['id']}'",$msconnect)	or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
				echo "Удален не используемый вопрос: ".$row['id']."<br>";
				}
			}
	echo "<hr>Оптимизация завершена."
	?>