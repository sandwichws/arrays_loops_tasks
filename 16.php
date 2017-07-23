<!doctype html>

<html>
	<head>
		<title>Задание 16</title>
  <head>
   <body>
		 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
	 	С помощью цикла foreach и оператора if выведите на экран
	 	столбец элементов массива, как показано на картинке.<br><br>

     РЕШЕНИЕ:<br><br>


 		$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];<br>
 		foreach ($arr as $value) {<br>
 		echo $value, " ";<br>
 		if(is_int($value/3)){ echo "/br>";}<br>
 		}<br>


		ОТВЕТ: <br>

		<?php
		$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
		foreach ($arr as $value) {
		echo $value, " ";
		if($value % 3 == false){ echo "</br>";}
		}
		?>
		   </body>
		<html>


   </body>
<html>
