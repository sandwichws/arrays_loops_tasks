<!doctype html>

<html>
	<head>
		<title>Задание 26</title>
  <head>
   <body>
		 26. Вам нужно создать массив и заполнить его случайными
		 числами от 1 до 100 (ф­я rand). Далее, вычислить произведение
		  тех элементов, которые больше ноля и у которых парные индексы.
			После вывести на экран элементы, которые больше ноля и
			у которых не парный индекс.<br><br>

     РЕШЕНИЕ:<br><br>

		 $arr = [];<br>
		 $result = 1;<br>
		 array_push($arr, rand(1, 1000), rand(1, 1000), rand(1, 1000), rand(1, 1000),<br>
		 rand(1, 1000),rand(1, 1000), rand(1, 1000), rand(1, 1000));<br>

		 echo "изначальный массив: ";<br>
		 foreach ($arr as $key => $value) {<br>
		 echo $value, ", ";<br>
		 }<br>
		 echo "br>";<br>

		 echo "произведение єлементов с непарнім индексом: ";<br>
		 foreach ($arr as $key => $value) {<br>
		 	if($value > 0 && is_int($key/2) == true){<br>
		       $result = $result * $value;<br>
		 			if($key !== 6){echo $value, " * ";}else{echo $value; }<br>
		 		}<br>
		 }<br>
		 echo " = ", $result, "<br>";
		 $result = 1;<br>
		 echo "произведение єлементов с парнім индексом: ";<br>
		 foreach ($arr as $key => $value) {<br>
		 if($value > 0 && is_int($key/2) == false){<br>
		 $result = $result * $value;<br>
		 if($key !== 7){echo $value, " * ";}else{echo $value; }<br>
		 }<br>
		 }<br>
		 echo " = ", $result;<br>
		 <br><br>

		ОТВЕТ: <br>

<?php

$arr = [];
$result = 1;
array_push($arr, rand(1, 1000), rand(1, 1000), rand(1, 1000), rand(1, 1000),
rand(1, 1000),rand(1, 1000), rand(1, 1000), rand(1, 1000));

echo "изначальный массив: ";
foreach ($arr as $key => $value) {
echo $value, ", ";
}
echo "<br>";

echo "произведение єлементов с непарнім индексом: ";
foreach ($arr as $key => $value) {
	if($value > 0 && is_int($key/2) == true){
      $result = $result * $value;
			if($key !== 6){echo $value, " * ";}else{echo $value; }
		}
}
echo " = ", $result, "<br>";
$result = 1;
echo "произведение єлементов с парнім индексом: ";
foreach ($arr as $key => $value) {
if($value > 0 && is_int($key/2) == false){
$result = $result * $value;
if($key !== 7){echo $value, " * ";}else{echo $value; }
}
}
echo " = ", $result;


?>

   </body>
<html>
