<!doctype html>

<html>
	<head>
		<title>Задание 20</title>
  <head>
   <body>
		 20.Нарисуйте пирамиду, как показано на рисунке,
		 только у вашей пирамиды должно быть 20 рядов, а не 5.

x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx<br>

     РЕШЕНИЕ:<br><br>
		 for($r = 1; $r < 21; $r++){<br>
		  for($c = 0; $c < $r; $c++){<br>
		    if($c == $r - 1){<br>
					echo "x", "br>";}else{
						echo "x"; }//если цикл доходит до конца, переходим на след строку
		 <br> }
		 }<br>

		 <br><br>

		ОТВЕТ: <br>
<?php
for($r = 1; $r < 21; $r++){
 for($c = 0; $c < $r; $c++){
   if($c == $r - 1){echo "x", "<br>";}else{echo "x"; }
 }
}

?>
   </body>
<html>
