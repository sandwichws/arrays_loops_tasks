<!doctype html>

<html>
	<head>
		<title>Доп Задание 3</title>
  <head>
   <body>
		 Доп ЗАДАЧА 3. Дан текст. Определить какая из двух
		 заданных букв встечается чаще.
<br><br>

     РЕШЕНИЕ:<br><br>
		 $nums = rand(0, 1000);<br>
		 for($i = 2; $i < 11; $i++){<br>
		 if(is_int($nums/$i) == true && $nums !== 2){<br>
		 	echo "Число $nums не является простым"; break;  }<br>
		 if($i == 10){ echo "Число $nums является простым"; }<br>
		 }<br>


		ОТВЕТ: <br>

<?php

$nums = rand(0, 1000);
for($i = 2; $i < 11; $i++){
if(is_int($nums/$i) == true && $nums !== 2){
	echo "Число $nums не является простым"; break;  }
if($i == 10){ echo "Число $nums является простым"; }
}


?>
   </body>
<html>
