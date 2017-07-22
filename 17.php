<!doctype html>

<html>
	<head>
		<title>Задание 17</title>
  <head>
   <body>
  17.Составьте массив месяцев. С помощью цикла foreach
	выведите все месяцы, а текущий месяц выведите жирным.
	Текущий месяц должен храниться в переменной $month.<br><br>
    РЕШЕНИЕ:
		$arr = ["January", "February", "March", "April", "May", "June", "July",
		"August", "September", "October", "November", "December"];<br>
		$month = date('F');<br>
		foreach ($arr as $value): <br>
		if($value == $month): <br>
	  b> echo $month, " ";  b> <br>
		 else: echo $value, " "; <br>
		 endif <br>
	   endforeach <br>

		 <br><br>


		ОТВЕТ: <br>
<?php
$arr = ["January", "February", "March", "April", "May", "June", "July",
"August", "September", "October", "November", "December"];
date_default_timezone_set('UTC');

$month = date('F');
foreach ($arr as $value):
if($value == $month): ?>
<b> <?php echo $month, " "; ?></b>
<?php else: echo $value, " "; ?>
<?php endif ?>
<?php endforeach ?>
   </body>
<html>
