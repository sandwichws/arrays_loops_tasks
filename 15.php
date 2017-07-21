<!doctype html>

<html>
	<head>
		<title>Задание 15</title>
  <head>
   <body>
    15. Дан массив $arr. С помощью цикла foreach и переменной
		$count подсчитайте количество элементов этого массива.
		Проверьте работу скрипта на примере массива с элементами
		4, 2, 5, 19, 13, 0, 10.<br><br>

    РЕШЕНИЕ:<br>
		$arr = [4, 2, 5, 19, 13, 0, 10];<br>
		$count = 0;<br>
		foreach ($arr as $value) {<br>
		$count++;<br>
		}<br>
		echo $count;<br>
		 <br><br>


		ОТВЕТ: <br>
<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach ($arr as $value) {
$count++;
}
echo $count;
?>
