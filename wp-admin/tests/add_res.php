<?php require('header.php'); ?>
<?php require_once('DB.php');

if(isset($_GET['testid'])){
	
	$res2 = mysql_query("SELECT result FROM $table_tests WHERE id='{$_GET['testid']}'");
	$row2=mysql_fetch_array($res2);
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="POST" action="add_res_act.php?testid=<?php echo $_GET['testid']; ?>">
		<b>Результаты теста: </b>
		<p><textarea rows="33" name="code" cols="105"><?php 
if(isset($row2['result']))
	echo $row2['result']; 
else{ ?>
//строчка за любым двойным слешем - это коментарий, его можно удалить
if($A > 1){			//добавьте условие, используя переменную ($A,$B,$C,$D,$E,$F,$G или $H),
				//которые вы указывали при задании вариантов ответа
	echo "Ответ 1";		//При выполнении написанного выше условия отобразится этот ответ.
				//(если внутри ответа есть кавычки надо использовать \.
				//Например Для отображения: Произведение "Война и мир". Надо записать: echo "Произведение \"Война и мир\"";)		
}
else if($B < 10){		//добавьте условие
	echo "Oтвет 2";		//Добавьте ответ
}
//если надо еще добавьте условие в виде if(выражение){ echo "ответ";}<?php } ?> 			
		</textarea></p>
		<hr>
		<p><input type="submit" value="Отправить" name="B1"><input type="reset" value="Сброс" name="B2"></p>
</form>
<?php require('footer.php'); ?>