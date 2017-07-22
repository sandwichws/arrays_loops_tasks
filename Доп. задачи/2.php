<!doctype html>

<html>
	<head>
		<title>Доп Задание 2</title>
  <head>
   <body>
		 Доп ЗАДАЧА 2. Дано случайное число. Определить простое ли оно
<br><br>

     РЕШЕНИЕ:<br><br>
		 $nums = rand(0, 1000);<br>
		 $issimple = false;<br>
		 for($i = 2; $i < 11; $i++){<br>
		 if(is_int($nums/$i) == true && $nums != $i){<br>
		 	echo "Число $nums не является простым";<br>
		 	$issimple = true; break;  }<br>
		 }<br>
		 if($issimple == false){echo "Число $nums является простым";}<br>



		ОТВЕТ: <br>

<?php


$nums = rand(0, 1000);
$issimple = false;
for($i = 2; $i < 11; $i++){
if(is_int($nums/$i) == true && $nums != $i){
	echo "Число $nums не является простым";
	$issimple = true; break;  }
}
if($issimple == false){echo "Число $nums является простым";}

?>
   </body>
<html>
