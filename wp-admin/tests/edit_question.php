<?php require('header.php'); ?>
<?php
	//require ($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');
	require_once('DB.php');
	$res = mysql_query("SELECT * FROM $table_questions WHERE id='{$_GET['num']}' ");
	$row=mysql_fetch_array($res);

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="POST" action="edit_question_act.php?num=<?php echo $_GET['num']; ?>&testid=<?php echo $_GET['testid']; ?>">
	<p><span lang="ru">Вопрос:</span></p>
	<p><textarea rows="7" name="question" cols="78"><?php echo $row['question'];?></textarea></p>
	<hr>
	<p><b><span lang="ru">Варианты ответа:</span></b></p>
	<blockquote>
		<hr>
		<p><span lang="ru"><font size="2">Можно выбрать:</font></span></p>
		<p><span lang="ru"><font size="2">&nbsp;</font><select size="2" name="OneOrFew" style="font-size: 8pt">
		<option <?php if($row['OneOrFew']==0) echo "selected";?> value="0">Один из</option>
		<option <?php if($row['OneOrFew']==1) echo "selected";?> value="1">Несколько</option></select></span></p><hr>
		<ol>
			<?php 
			$ans = unserialize($row['ans']);
			$variables = unserialize($row['variables']);
			$opcode = unserialize($row['opcode']);
			$operand = unserialize($row['operand']);
			for($i=0;$i<10;$i++){ ?>
				<li>
					<p></p>
					<p><textarea rows="2" name="ans[]" cols="45"><?php echo $ans[$i]; ?></textarea><span lang="ru">
					</span></p>
					<p><font size="2"><span lang="ru">Действия:</span>&nbsp;&nbsp;
					</font></p>
					<p><span lang="ru">&nbsp;<select size="1" name="variables[]" style="font-size: 10pt">
					<option <?php if($variables[$i]==0) echo "selected";?> value="0">A</option>
					<option <?php if($variables[$i]==1) echo "selected";?> value="1">B</option>
					<option <?php if($variables[$i]==2) echo "selected";?> value="2">C</option>
					<option <?php if($variables[$i]==3) echo "selected";?> value="3">D</option>
					<option <?php if($variables[$i]==4) echo "selected";?> value="4">E</option>
					<option <?php if($variables[$i]==5) echo "selected";?> value="5">F</option>
					<option <?php if($variables[$i]==6) echo "selected";?> value="6">G</option>
					<option <?php if($variables[$i]==7) echo "selected";?> value="7">H</option></select>
					<select size="1" name="opcode[]" style="font-size: 10pt">
					<option <?php if($opcode[$i]==0) echo "selected";?> value="0">+</option>
					<option <?php if($opcode[$i]==1) echo "selected";?> value="1">-</option></select></span>
					<input type="text" name="operand[]" size="3" value="<?php echo $operand[$i];?>"></p>
				</li>
			<?php } ?>
		</ol>		
	</blockquote>
	<hr>
	<p><input type="submit" value="Сохранить" name="button"><input type="reset" value="Сброс" name="B2"><input type="submit" value="Удалить" name="button"></p>
</form>

<?php require('footer.php'); ?>