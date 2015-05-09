<?php	include('./wp-blog-header.php');
	include($_SERVER['DOCUMENT_ROOT'].'/wp-admin/tests/DB.php');
 ?>

<style type="text/css">
   #test {
	position: relative; /* относительное позиционирование */
	bottom: 15px; /* Положение от нижнего края */
	left: 50px; /* Положение от правого края */
	top: 30px;
	float: left;
	padding: 20px 10px 10px 0;
	width: 200px;
   }
  </style>


<?php get_header(); ?>

<div id="test">
	<div <?php post_class() ?>>
		<h2><?php the_title(); ?></h2>
		<div align = "left">
		
			<?php
				if(isset($_GET['id'])){
					$id=$_GET['id'];
					if(isset($_GET['num']))
						$num = $_GET['num'];
						else
						$num = 1;
		
					$res = mysql_query("SELECT * FROM $table_tests where id='{$id}'");
					$row=mysql_fetch_array($res);
					$question = unserialize($row['question']);
						//если вопросы закончились
						if(count($question)<$num){
							echo "<p><u>Ваши результаты:</u></p>";		
							//работа с базой данных
								$r=mysql_query("SELECT result FROM $table_tests WHERE id='{$id}'");
								$row = mysql_fetch_array($r);
								$result=$row['result'];
							//создаем файл
								$name = $_SERVER['DOCUMENT_ROOT']."/wp-admin/tests/temp/".rand(0,100000);
								$file=fopen($name,"a+");
								flock($file,LOCK_EX);
								ftruncate($file,0);
								fwrite($file,"<?php\r\n".$result."\r\n?>");
								flock($file,LOCK_UN);
								fclose($file);
							//получаем переменные для выведения результатов
								$A = $_COOKIE['A'];
								$B = $_COOKIE['B'];
								$C = $_COOKIE['C'];
								$D = $_COOKIE['D'];
								$E = $_COOKIE['E'];
								$F = $_COOKIE['F'];
								$G = $_COOKIE['G'];
								$H = $_COOKIE['H'];
							//код вывода результатов
								include "$name";
							//удаляем записанный файл
								unlink($name);
							echo "<p><a href=\"/\">На главную</a><p>";}
						else{
							?>
							<form method="POST" action="<?php echo "ans_save.php?id=$id&num=$num"; ?>">
							<?php
							$qu= mysql_query("SELECT * FROM $table_questions where id = '{$question[$num-1]}'");
							$row=mysql_fetch_array($qu);
							echo $row['question']."<p></p>";
							$OneOrFew = $row['OneOrFew'];
							$ans = unserialize($row['ans']);
							for($i=0;$i<count($ans) && $ans[$i]!="";$i++){
								if($OneOrFew==0){
									echo "<input type=\"radio\" value=\"$i\" checked name=\"flag\">";
					                	}else{
									echo "<input type=\"checkbox\" name=\"flag[]\" value=\"$i\">";
									}
									echo $ans[$i];
									echo "<br>";
								} 
							?>
							<p></p>
							<input type="submit" value="&#1057;&#1083;&#1077;&#1076;&#1091;&#1102;&#1097;&#1080;&#1081;" name="button">
							</form>
							<?php
							echo "<br><p>";
							if($num!=1) echo "<font size=\"2\"><a href=\"?id=$id&num=".($num-1)."\">Предыдущий</a></font>";
							if(count($question) != $num) echo "&nbsp;&nbsp; <font size=\"2\"><a href=\"?id=$id&num=".(1+$num)."\">Следующий</a></font>";
							echo "</p>";
							}
					}
			?>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>