<!doctype html>

<html>
	<head>
		<title>Доп Задание 7</title>
  <head>
   <body>
		   7. Проверить строку на симметричность.

<br><br>

     РЕШЕНИЕ:<br><br>
		 $text = "129721";<br>
		 $letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>
		 $count = 0;<br>
		 $flag = false;<br>

		 foreach ($letters as $key => $value) {<br>
		 $count ++;}<br>

		 if(is_int($count/2) == true){<br>
		 for($i = 0; $i < $count; $i++) {<br>
		 if($letters[$i] != $letters[$count - (1 + $i)]){<br>
		  $flag = true; echo "Строка не симметрична!";<br>
		 	break;<br>
		     }<br>
		 }<br>
		 }else{<br>
		 	$fullCount = (($count/2) + 0.5) - 1; //индекс нечётного числа по середине.<br>
		  for($i2 = 0; $i2 < $count; $i2++) {<br>
		  if($letters[$i2] != $letters[($count -1) - $i2] && $i2 != ($fullCount)) {<br>
		 	 $flag = true;  echo "Строка не симметрична!";<br>
		 	 break;<br>
		 		 }<br>
		 	}<br>
		 }<br>
		  if($flag == false){echo "все хорошо, строка симметрична:)"; }<br>


		ОТВЕТ: <br>
<br>
<?php
$text = "129721";
$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);
$count = 0;
$flag = false;

foreach ($letters as $key => $value) {
$count ++;}

if(is_int($count/2) == true){
for($i = 0; $i < $count; $i++) {
if($letters[$i] != $letters[$count - (1 + $i)]){
 $flag = true; echo "Строка не симметрична!";
	break;
    }
}
}else{
	$fullCount = (($count/2) + 0.5) - 1; //индекс нечётного числа по середине.
 for($i2 = 0; $i2 < $count; $i2++) {
 if($letters[$i2] != $letters[($count -1) - $i2] && $i2 != ($fullCount)) {
	 $flag = true;  echo "Строка не симметрична!";
	 break;
		 }
	}
}
 if($flag == false){echo "все хорошо, строка симметрична:)"; }
?>
   </body>
<html>
