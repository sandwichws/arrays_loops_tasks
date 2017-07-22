<html>
	<head>
		<title>Доп Задание 5</title>
  <head>
   <body>
		 Доп ЗАДАЧА 5. Определить является ли строка
		 правильной записью целого числа.
<br><br>

     РЕШЕНИЕ:<br><br>
		 $text = "+1888887";<br>
		 $normal = ['0', '1', '2', '3', '4', '5','6', '7', '8','9',<br>
		  '-1', '-2', '-3', '-4', '-5','-6', '-7', '-8','-9'];<br>


		 $letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>


		 foreach ($letters as $key => $value) {<br>
		   foreach ($normal as $key2 => $value2) {<br>
		     if($key == 0 && $value == "-"){break;}<br>
		 		if($key == 0 && $value == "+"){break;}<br>
		 		if($value == $value2){ break;}<br>
		 		if($value2 == end($normal)){ echo "запись неправильна!";  break 2; }<br>
		   }<br>
		 	if($value == end($letters)){ echo "запись правильна!"; break; }<br>


		 }<br>

		ОТВЕТ: <br>

<br>
<?php

$text = "+1888887";
$normal = ['0', '1', '2', '3', '4', '5','6', '7', '8','9',
 '-1', '-2', '-3', '-4', '-5','-6', '-7', '-8','-9'];


$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);


foreach ($letters as $key => $value) {
  foreach ($normal as $key2 => $value2) {
    if($key == 0 && $value == "-"){break;}
		if($key == 0 && $value == "+"){break;}
		if($value == $value2){ break;}
		if($value2 == end($normal)){ echo "запись неправильна!";  break 2; }
  }
	if($value == end($letters)){ echo "запись правильна!"; break; }


}



?>
   </body>
<html>
