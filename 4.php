<!doctype html>

<html>
	<head>
		<title>Задание 4</title>
  <head>
   <body>
    4. Дан массив $arr. С помощью первого цикла foreach выведите
		на экран столбец ключей, с помощью второго — столбец элементов.<br><br>
    РЕШЕНИЕ:<br>

		$arr = [1, 20, 15, 17, 24, 35];<br>
		foreach ($arr as $key => $value) {<br>
		  echo "$key";} <br>
		foreach ($arr as $key => $value) {<br>
		  echo "$value";}<br><br>
		ОТВЕТ: <br>
		<?php
		$arr = [1, 20, 15, 17, 24, 35];
		foreach ($arr as $key => $value) {
			echo "$key</br>";
		}?> <br>
    <?php
		foreach ($arr as $key => $value) {
			echo "$value</br>";
		}
		?>

   </body>
<html>
