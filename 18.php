<!doctype html>

<html>
	<head>
		<title>Задание 18</title>
  <head>
   <body>
     18 Задание: Составьте массив дней недели. С помощью цикла
		 foreach выведите все дни недели, выходные дни следует вывести жирным.

     РЕШЕНИЕ:
		 $arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday",<br>
		 "Saturday", "Sunday"];<br>
		 $weekday = [];<br>
		 array_push($weekday, $arr[5]);<br>
		 array_push($weekday, $arr[6]);<br>
		 foreach ($arr as $value):<br>
		 if($value == $weekday[0] || $value == $weekday[1]): <br>
		 b>  echo  $value , " "; ?>/b><br>
		 else: echo $value, " "; ?><br>
		 endif <br>
		 endforeach <br>

		 <br><br>

		ОТВЕТ: <br>
<?php
$arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
"Saturday", "Sunday"];
$weekday = [];
array_push($weekday, $arr[5]);
array_push($weekday, $arr[6]);
foreach ($arr as $value):
if($value == $weekday[0] || $value == $weekday[1]): ?>
<b> <?php echo  $value , " "; ?></b>
<?php else: echo $value, " "; ?>
<?php endif ?>
<?php endforeach ?>
   </body>
<html>
