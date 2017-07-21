<!doctype html>

<html>
	<head>
		<title>Доп Задание 7</title>
  <head>
   <body>
		   7. Проверить строку на симметричность.

<br><br>

     РЕШЕНИЕ:<br><br>
		 $text = "1891001981";<br>
 		$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>
 		$count = 0;<br>

 		foreach ($letters as $key => $value) {<br>
 		$count++;}<br>

 		if(is_int($count/2) == true){<br>
 		for($i = 0; $i < $count; $i++) {<br>
 		if($letters[$i] != $letters[$count - (1 + $i)]){<br>
 		 echo "Строка не симметрична!";<br>
 			break;<br>
 		    }<br>
 		if($i == $count/2){echo "Строка симметрична!";}<br>
 		  }<br>
 		}else{echo "Строка не симметрична!"; }<br>


		ОТВЕТ: <br>
<br>
<?php

$text = "1891001981";
$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);
$count = 0;

foreach ($letters as $key => $value) {
$count++;}

if(is_int($count/2) == true){
for($i = 0; $i < $count; $i++) {
if($letters[$i] != $letters[$count - (1 + $i)]){
 echo "Строка не симметрична!";
	break;
    }
if($i == $count/2){echo "Строка симметрична!";}
  }
}else{echo "Строка не симметрична!"; }


?>
   </body>
<html>
