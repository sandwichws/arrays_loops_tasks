<!doctype html>

<html>
	<head>
		<title>Доп Задание 5</title>
  <head>
   <body>
		 Доп ЗАДАЧА 5. Определить, является ли
		 строка правильной записью целого числа.
<br><br>

     РЕШЕНИЕ:<br><br>
		 $varl = "(";<br>
	 	$varr = ")";<br>
	 	$lCount = 0;<br>
	 	$rCount = 0;<br>

	 	$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>
	 	foreach ($letters as $key => $value) {<br>
	 	if($value == $varl){ $lCount++; }<br>
	 	if($value == $varr){ $rCount++; }<br>
	 	}<br>
	 	if($lCount == $rCount){ echo "Скобки расставлены правильно";}else {<br>
	 		echo "Скобки расставлены неправильно!";<br>
	 	}<br>

		ОТВЕТ: <br>
		Lorem ipsum )dolor sit amet), consectetur adipiscing elit.<br>
		Curabitur in lectus vitae ligula faucibus pulvinar. Aenean lobortis,<br>
		ex eget consectetur suscipit, urna nisi imperdiet tortor, vel cursus<br>
		ligula enim at tellus. In vel dictum arcu. Etiam eu purus pretium,<br>
		sollicitudin sem et, efficitur augue. Vivamus volutpat velit arcu.<br>
<br>
<?php
$text = "2*)4+5-(3*2()";
$varl = "(";
$varr = ")";
$lCount = 0;
$rCount = 0;
$right = false;
$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);
foreach ($letters as $key => $value) {
if($value == $varl){ $lCount++; }
if($value == $varr) { $rCount++; }
if($value == $varr && $lCount < $rCount) {
	echo "Скобки расставлены неправильно!"; $right = true; break; }
}

if($lCount == $rCount){
	echo "Скобки расставлены правильно!";}

if($lCount != $rCount && $right == false){
echo "Скобки расставлены неправильно!";
}

?>
   </body>
<html>
