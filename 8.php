<!doctype html>

<html>
	<head>
		<title>Задание 9</title>
  <head>
   <body>
    8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
		С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
		<br><br>
    РЕШЕНИЕ:<br>

		$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];<br>
		foreach ($arr as $key => $value) {<br>
				echo $value;<br>
 	 }<br><br>

		ОТВЕТ: <br>

		<?php
			$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
			foreach ($arr as $key => $value) {
					echo $value;
			}
		?>

   </body>
<html>
