<!doctype html>

<html>
	<head>
		<title>Доп Задание 6</title>
  <head>
   <body>
		 Доп ЗАДАЧА6. Подсчитать в тексте максимальное количетсво
		 цифр, идущих подряд.

<br><br>

     РЕШЕНИЕ:<br><br>
		 $text = "-18558e8e8e8e7";<br>
		 $normal = ['0', '1', '2', '3', '4', '5','6', '7', '8','9',<br>
		  '-1', '-2', '-3', '-4', '-5','-6', '-7', '-8','-9'];<br>
		 $currentCount = 0;<br>
		 $maxCount = 0;<br>
		 $letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>

		 foreach ($letters as $key => $value) {<br>
		   foreach ($normal as $key2 => $value2) {<br>
		     if($key == 0 && $value == "-"){break;}<br>
		 		if($value == $value2){<br>
		 			$currentCount++;<br>
		 			if($currentCount > $maxCount){$maxCount++; break;}<br>
		 		}<br>
		 		if($value2 == end($normal)){ $currentCount = 0; }<br>
		   }<br>
		 }<br>
		 echo "максимальное кол-во цифр, идущих под ряд: ", $maxCount;<br>

		ОТВЕТ: <br>
<br>
<?php

$text = "-18558e8e8e8e7";
$normal = ['0', '1', '2', '3', '4', '5','6', '7', '8','9',
 '-1', '-2', '-3', '-4', '-5','-6', '-7', '-8','-9'];
$currentCount = 0;
$maxCount = 0;
$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);

foreach ($letters as $key => $value) {
  foreach ($normal as $key2 => $value2) {
    if($key == 0 && $value == "-"){break;}
		if($value == $value2){
			$currentCount++;
			if($currentCount > $maxCount){$maxCount++; break;}
		}
		if($value2 == end($normal)){ $currentCount = 0; }
  }
}
echo "максимальное кол-во цифр, идущих под ряд: ", $maxCount;

?>
   </body>
<html>
