<?php require('header.php'); ?>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');
require_once('DB.php');
$res3 = mysql_query("SELECT id FROM $table_tests");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="POST" action="delete_test_act.php">

	<p><span lang="ru"><font size="5"><b><font color="#FF0000">Внимание!!!</font> 
	Этим действием вы <font color="#FF0000">удалите</font> тест.</b></font></span></p>
	<p><b><span lang="ru">Выберите тест для удаления:</span></b></p>
	
	<select size="1" name="testid">
	<?php
	for($i=0;$row3 = mysql_fetch_array($res3);$i++){
		$tid = $row3['id']; ?>
		<option value="<?php echo $tid;?>">
		<?php 
		$p=get_post($tid); 
		echo $p->post_title;?>
		</option>
		<?php }
	?>
	</select>
	<p><input type="submit" value="Удалить" name="delete_test"></p>
</form>

<?php require('footer.php'); ?>