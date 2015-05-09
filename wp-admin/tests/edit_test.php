<?php require('header.php'); ?><?php require ($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');
require_once('DB.php');

if(isset($_POST['testid']) || isset($_GET['testid'])){
	if(isset($_GET['testid'])) $_POST['testid']=$_GET['testid'];
	
	$res = mysql_query("SELECT * FROM wp_posts WHERE id='{$_POST['testid']}' ");
	$row=mysql_fetch_array($res);
	
	$res2 = mysql_query("SELECT * FROM $table_tests WHERE id='{$_POST['testid']}'");
	$row2=mysql_fetch_array($res2);
	}

$res3 = mysql_query("SELECT id FROM $table_tests");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="POST" action="edit_test.php">

	<p><b><span lang="ru">Выберите тест:</span></b></p>
	
	<select size="1" name="testid">
	<?php
	for($i=0;$row3 = mysql_fetch_array($res3);$i++){
		$tid = $row3['id']; ?>
		<option <?php if($_POST['testid']==$tid) echo "selected";?> value="<?php echo $tid;?>">
		<?php 
		$p=get_post($tid); 
		echo $p->post_title;?>
		</option>
		<?php }
	?>
	</select>
	<p><input type="submit" value="Выбрать" name="select_test"></p>
</form>
<?php
if(isset($_POST['testid'])){ ?>
<form method="POST" action="edit_test_act.php?testid=<?php echo $_POST['testid'];?>">
	<p><span lang="ru"><b>Редактировать</b></span><b><span lang="ru"> тест:</span></b></p>
	<p><span lang="ru">Имя теста</span>: 
	<input type="text" name="name" size="20" value="<?php echo $row['post_title']; ?>"></p>
	<p><span lang="ru">Категория: </span>
	<?php wp_dropdown_categories('name=kat&show_count=0&hierarchical=0&orderby=name&hide_empty=0'); ?></p>
	<p><span lang="ru">Описание:</span></p>
	<p><textarea rows="19" name="description" cols="76"><?php echo str_replace("\\\"", "\"",$row['post_content']); ?></textarea></p>
	<p><span lang="ru">Обработка результата:</span></p>
	<p><textarea rows="19" name="result" cols="76"><?php echo $row2['result']; ?></textarea></p>
	<hr>
	
	<p><span lang="ru"><b>Редактировать</b></span><b><span lang="ru"> вопросы:</span></b></p>
	<p><span lang="ru">Выберите вопрос:
	<?php
	$question=unserialize($row2['question']);
	for($i=0;$i<count($question);$i++){?>
		<a href="edit_question.php?num=<?php echo $question[$i]; ?>&testid=<?php echo $_POST['testid']; ?>"><?php echo $i+1;?></a>&nbsp;&nbsp;
		<?php }
	?>
	<a href="add_question.php?testid=<?php echo $_POST['testid']; ?>">Добавить вопрос</a>
	</span>
	<span lang="ru">
	<hr>
	<p><input type="submit" value="&#1054;&#1090;&#1087;&#1088;&#1072;&#1074;&#1080;&#1090;&#1100;" name="B1"><input type="reset" value="&#1057;&#1073;&#1088;&#1086;&#1089;" name="B2"></p>
</form>
<?php } ?>

<?php require('footer.php'); ?>