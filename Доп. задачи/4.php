<!doctype html>

<html>
	<head>
		<title>Доп Задание 4</title>
  <head>
   <body>
		 Доп ЗАДАЧА 4. Определить, правильно ли в тексте расставлены круглые скобки
<br><br>

     РЕШЕНИЕ:<br><br>
		 $text = "2*)4+5-(3*2()";<br>
 		$varl = "(";<br>
 		$varr = ")";<br>
 		$lCount = 0;<br>
 		$rCount = 0;<br>
 		$right = false;<br>
 		$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);<br>
 		foreach ($letters as $key => $value) {<br>
 		if($value == $varl){ $lCount++; }<br>
 		if($value == $varr) { $rCount++; }<br>
 		if($value == $varr && $lCount < $rCount) {<br>
 			echo "Скобки расставлены неправильно!"; $right = true; break; }<br>
 		}<br>

 		if($lCount == $rCount){<br>
 			echo "Скобки расставлены правильно!";}<br>

 		if($lCount != $rCount && $right == false){<br>
 		echo "Скобки расставлены неправильно!";<br>
 		}<br>

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
