<?php require('private.php'); ?>
<?php
	include "DB.php";
	//
	$question =  $_POST['question'];
	$ans = serialize ($_POST['ans']);
	$OneOrFew = $_POST['OneOrFew'];
	$variables = serialize ($_POST['variables']);
	$opcode = serialize ($_POST['opcode']);
	$operand = serialize ($_POST['operand']);

	mysql_query("INSERT INTO $table_questions (question,ans,OneOrFew,variables,opcode,operand) VALUES('{$question}','{$ans}','{$OneOrFew}','{$variables}','{$opcode}','{$operand}')", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	//добавляем в тест вопрос
	$quesid =mysql_insert_id();
	$res = mysql_query("SELECT question FROM $table_tests WHERE id='{$_GET['testid']}'");
	$row=mysql_fetch_array($res);
	$ques = unserialize($row['question']);
	if($ques !=NULL)
		array_push($ques , $quesid);
	else
		$ques = array($quesid);
	$ques = serialize($ques);
	mysql_query("UPDATE $table_tests SET question = '{$ques}' WHERE id = '{$_GET['testid']}'", $msconnect) or die("Ошибка. Попробуйте еще раз.<br>".mysql_error());
	//
	if($_POST['end'] == 0){
?>
		<script language="javascript">
			location.href="add_question.php?testid=<?php echo $_GET['testid']; ?>";
		</script>
<?php
	}else{
?>
	<script language="javascript">
			location.href="add_res.php?testid=<?php echo $_GET['testid']; ?>";
	</script>
<?php } ?>