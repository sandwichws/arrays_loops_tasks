<!doctype html>

<html>
	<head>
		<title>Задание 11</title>
  <head>
   <body>
    11. Выведите столбец четных чисел в промежутке от нуля до 100.<br><br>
    РЕШЕНИЕ:<br>
		for($i = 0; $i <= 100; $i++){<br>
		 if($i /2 != is_float($i /2)){<br>
			 echo $i;}
		 }<br><br>


		ОТВЕТ: <br>

		<?php
			for($i = 0; $i <= 100; $i++){
       if($i /2 != is_float($i /2)){
				 echo "$i </br>";}
			 }

		?>

   </body>
<html>
