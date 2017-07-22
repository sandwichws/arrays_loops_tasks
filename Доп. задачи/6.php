<!doctype html>

<html>
	<head>
		<title>Доп Задание 6</title>
  <head>
   <body>
		 Доп ЗАДАЧА6. Подсчитать в тексте максимальное количетсво
		цифр, идущих подряд.<br>
		РЕШЕНИЕ:<br>
		$text = "-18558e8e8e8e7";<br>
		$currentCount = 0;<br>
		$maxCount = 0;<br>
		$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>

		foreach ($letters as $key => $value) {<br>

			if(ctype_digit($value)){<br>
				$currentCount++;<br>
				if($currentCount > $maxCount){$maxCount = $currentCount;}<br>
			 }else{<br>
				$currentCount = 0;<br>
			}<br>
		}<br>
		echo "максимальное кол-во цифр, идущих под ряд: ", $maxCount;<br><br>
   </body>
<html>

<?php

$text = "-18558e8e8e8e7";
$currentCount = 0;
$maxCount = 0;
$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);

foreach ($letters as $key => $value) {

	if(ctype_digit($value)){
		$currentCount++;
		if($currentCount > $maxCount){$maxCount = $currentCount;}
	 }else{
		$currentCount = 0;
	}
}
echo "максимальное кол-во цифр, идущих под ряд: ", $maxCount;

?>
