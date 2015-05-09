<?php require('header.php'); ?>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');
	
//require_once('../../wp-load.php');
//require_once('../includes/admin.php');
//include('../../wp-includes/category-template.php');

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="POST" action="add_test_act.php">
	<p><b><span lang="ru">Добавить тест:</span></b></p>
	<p><span lang="ru">Имя теста</span>: <input type="text" name="name" size="20"></p>
	<p><span lang="ru">Категория: </span>
	<?php wp_dropdown_categories('name=kat&show_count=0&hierarchical=0&orderby=name&hide_empty=0'); ?></p>
	<p><span lang="ru">Описание:</span></p>
	<p><textarea rows="19" name="description" cols="76"></textarea></p>
	<p><input type="submit" value="&#1054;&#1090;&#1087;&#1088;&#1072;&#1074;&#1080;&#1090;&#1100;" name="B1"><input type="reset" value="&#1057;&#1073;&#1088;&#1086;&#1089;" name="B2"></p>
</form>

<?php require('footer.php'); ?>