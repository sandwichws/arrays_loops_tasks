<!doctype html>

<html>
	<head>
		<title>Задание 21</title>
  <head>
   <body>
		 21. Нарисуйте пирамиду, как показано на рисунке,
		 только у вашей пирамиды должно быть 9 рядов, а не 5.

1<br>
22<br>
333<br>
4444<br>
55555<br>

     РЕШЕНИЕ:<br><br>
		 for($r = 1; $r < 10; $r++){<br>
		  for($c = 0; $c < $r; $c++){<br>
		    if($c == $r - 1){echo $r, "br>";}else{echo $r; }<br>
		  }<br>
		 }<br>

		 <br><br>

		ОТВЕТ: <br>
<?php
for($r = 1; $r < 10; $r++){
 for($c = 0; $c < $r; $c++){
   if($c == $r - 1){echo $r, "<br>";}else{echo $r; }
 }
}
?>
   </body>
<html>
