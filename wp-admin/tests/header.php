<?php require ('private.php');?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Редактор тестов</title>
<meta name="description" content="Редактор тестов">
</head>

<body text="#800000" bgcolor="#FFFFCC">

<table border="0" cellpadding="0" cellspacing="0" width=100% height="578">
	<!-- MSTableType="layout" -->
	<tr>
		<td valign="top" colspan="2" height="79">
		<p align="center"><b><span lang="ru">
<font size="4" color="#000000" face="Comic Sans MS">Редактор тестов</font></span></b></td>
	</tr>
	<tr>
		<td valign="top" rowspan="2" width=30%>
		<ol>
	<li>
	<p style="line-height: 200%"><span lang="ru"><a href="add_test.php">
	<font size="2">Добавить новый тест</font></a></span></li>
	<li>
	<p style="line-height: 200%"><span lang="ru"><a href="edit_test.php">
	<font size="2">Редактировать тест</font></a></span></li>
	<li>
	<p style="line-height: 200%"><span lang="ru"><a href="delete_test.php">
	<font size="2">Удалить тест</font></a></span></li>
	<li>
	<p style="line-height: 200%"><a href="optimize.php"><span lang="ru">
	<font size="2">Оптимизация</font></span></a></li>
	<li>
	<p style="line-height: 200%"><span lang="ru"><font size="2">
	<a href="<?php echo "http://".$_SERVER['SERVER_NAME']; ?>">Переидти на сайт</a></font></span></li>
</ol>
		</td>
		<td valign="top" height="52">
		<p align="right"><font size="2"><?php echo date("Y-m-d h:i");?></font></p></td>
	</tr>
	<tr>
		<td valign="top" height="447" width=70%>