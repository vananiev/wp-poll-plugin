<?php require('header.php'); ?>
<?php
	include "DB.php";
	//
	if($_POST['button']=="Сохранить"){
		$question =  $_POST['question'];
		$ans = serialize ($_POST['ans']);
		$OneOrFew = $_POST['OneOrFew'];
		$variables = serialize ($_POST['variables']);
		$opcode = serialize ($_POST['opcode']);
		$operand = serialize ($_POST['operand']);
	
		mysql_query("UPDATE $table_questions SET question='{$question}', ans='{$ans}', OneOrFew='{$OneOrFew}', variables='{$variables}',opcode='{$opcode}',operand='{$operand}' WHERE id='{$_GET['num']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	}else{
		//удаляем из таблицы вопросов
		mysql_query("DELETE FROM $table_questions  WHERE id='{$_GET['num']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		//удаляем из таблицы теста
		$res = mysql_query("SELECT question FROM $table_tests WHERE id='{$_GET['testid']}'");
		$row=mysql_fetch_array($res);
		$ques = unserialize($row['question']);
		if($ques !=NULL){
			$i=0;
			for(;;$i++)
				if($ques[$i] == $_GET['num']) break;
			for(;$i< (count($ques)-1);$i++)
				$ques[$i]=$ques[$i+1];
			}
			unset($ques[$i]);
		$ques = serialize($ques);
		mysql_query("UPDATE $table_tests SET question = '{$ques}' WHERE id = '{$_GET['testid']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
		}
?>

<script language="javascript">
	location.href="edit_test.php?testid=<?php echo $_GET['testid']; ?>";
</script>
<?php require('footer.php'); ?>