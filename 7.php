<!doctype html>

<html>
	<head>
		<title>Задание 7</title>
  <head>
   <body>
    7. Дан массив с элементами 2, 5, 9, 15, 0, 4.
		С помощью цикла foreach и оператора if выведите на
		экран столбец тех элементов массива, которые больше 3­х,
		но меньше 10.<br><br>
    РЕШЕНИЕ:<br>

		$arr = [2, 5, 9, 15, 0, 4];<br>
 	 foreach ($arr as $key => $value) {<br>
 		 if($value > 3 && $value < 10){<br>
 			 echo "$value";<br>
 		 }
 	 }<br><br>

		ОТВЕТ: <br>

	   <?php
		   $arr = [2, 5, 9, 15, 0, 4];
			 foreach ($arr as $key => $value) {
				 if($value > 3 && $value < 10){
					 echo "$value <br>";
				 }
			 }
	   ?>

   </body>
<html>
