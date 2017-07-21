<!doctype html>

<html>
	<head>
		<title>Задание 3</title>
  <head>
   <body>
     3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
     С помощью цикла foreach найдите сумму квадратов элементов этого массива.
     Результат запишите переменную $result.<br>
   </body>
<html>

<?php
$arr = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $key => $value) {
  $result = $result + pow($value, 2);
  if($key == 5){ echo "Ответ: ", $result;}
}
?>
