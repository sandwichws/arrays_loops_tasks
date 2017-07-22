<!doctype html>

<html>
	<head>
		<title>Задание 14</title>
  <head>
   <body>
		 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
		С помощью цикла foreach и оператора if проверьте есть
		ли в массиве элемент со значением $e, равном 2, 3 или 4.
		Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.<br><br>

     РЕШЕНИЕ:<br><br>
		 $arr = [4, 2, 5, 19, 13, 0, 10];<br>
		 $e = [2, 3, 4];<br>
		 $check = false;<br>
		 foreach ($arr as $value) {<br>
		 	foreach ($e as $value2){<br>
		 		if($value == $value2){ $check = true;}<br>
		 	}<br>

		 }<br>
		 if($check == true){echo "Есть!";}else{echo "Нет!";}<br>

		ОТВЕТ: <br>

		<?php
		$arr = [4, 2, 5, 19, 13, 0, 10];
		$e = [2, 3, 4];
		$check = false;
		foreach ($arr as $value) {
			foreach ($e as $value2){
				if($value == $value2){ $check = true;} //если массив $е содержит элмент массива $arr
			}

		}
		if($check == true){echo "Есть!";}else{echo "Нет!";}

		?>
		   </body>
		<html>


   </body>
<html>
