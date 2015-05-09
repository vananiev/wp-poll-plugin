<?php
	
	//обращение к Ѕƒ насчет вопроса
	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-admin/tests/DB.php');
	$id=$_GET['id'];
	$num=$_GET['num'];
	if(isset($_POST['flag'])){
		$flag=$_POST['flag'];
		if($num == 1){
			unset($_COOKIE['A']);
			unset($_COOKIE['B']);
			unset($_COOKIE['C']);
			unset($_COOKIE['D']);
			unset($_COOKIE['E']);
			unset($_COOKIE['F']);
			unset($_COOKIE['G']);
			unset($_COOKIE['H']);
			$var = Array(0,0,0,0,0,0,0,0);
		    }else{
			//получение переменных
			$var[0] = $_COOKIE['A'];
			$var[1] = $_COOKIE['B'];
			$var[2] = $_COOKIE['C'];
			$var[3] = $_COOKIE['D'];
			$var[4] = $_COOKIE['E'];
			$var[5] = $_COOKIE['F'];
			$var[6] = $_COOKIE['G'];
			$var[7] = $_COOKIE['H'];
			}

		$res = mysql_query("SELECT * FROM $table_tests where id = '{$id}'");
		$row=mysql_fetch_array($res);
		$questions=unserialize($row['question']);
		$qu= mysql_query("SELECT * FROM $table_questions where id = '{$questions[$num-1]}'");
		$row=mysql_fetch_array($qu);
		$variables = unserialize($row['variables']);
		$opcode = unserialize($row['opcode']);
		$operand = unserialize($row['operand']);
		$OneOrFew = $row['OneOrFew'];
		
		//выполнение операции
		if($OneOrFew ==0){
			$c  = $variables[$flag];
			if($opcode[$flag] ==0)
				$var[$variables[$flag]] += $operand[$flag];
			if($opcode[$flag] ==1)
				$var[$variables[$flag]] -= $operand[$flag];
			}
			else{
			for($i=0;$i<10;$i++){
				if(isset($flag[$i])){
					$c = $flag[$i]; 
					if($opcode[$c] ==0)
						$var[$variables[$c]] += $operand[$c];
					if($opcode[$c] ==1)
						$var[$variables[$c]] -= $operand[$c];		
					}
				}
			}
		
		//сохранение переменных
		setcookie("A",$var[0],time()+3600, "/");
		setcookie("B",$var[1],time()+3600, "/");
		setcookie("C",$var[2],time()+3600, "/");
		setcookie("D",$var[3],time()+3600, "/");
		setcookie("E",$var[4],time()+3600, "/");
		setcookie("F",$var[5],time()+3600, "/");
		setcookie("G",$var[6],time()+3600, "/");
		setcookie("H",$var[7],time()+3600, "/");
	}
?>

<script language="javascript">
	location.href="<?php $num=$_GET['num']+1;
			echo "test.php?id=$id&num=$num"; ?>";
</script>

