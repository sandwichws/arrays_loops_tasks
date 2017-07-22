<!doctype html>

<html>
	<head>
		<title>Задание 19</title>
  <head>
   <body>
     19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
		 Текущий день должен храниться в переменной $day.

     РЕШЕНИЕ:
		 $arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday",<br>
		 "Saturday", "Sunday"];<br>
		 $day = [];<br>
		 array_push($day, $arr[3]);<br>
		 foreach ($arr as $value):<br>
		 if($value == $day[0]): <br>
		 b>  echo  $value , " "; ?>/b><br>
		 else: echo $value, " "; ?><br>
		 endif <br>
		 endforeach <br>

		 <br><br>

		ОТВЕТ: <br>
<?php
$arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
"Saturday", "Sunday"];
$day = [];
date_default_timezone_set('UTC');
array_push($day, $arr[3]);
foreach ($arr as $value):
if($value == date('l')): ?>
<b> <?php echo  $value , " "; ?></b>
<?php else: echo $value, " "; ?>
<?php endif ?>
<?php endforeach ?>
   </body>
<html>
