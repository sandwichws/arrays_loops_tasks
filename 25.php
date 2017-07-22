<!doctype html>

<html>
	<head>
		<title>Задание 25</title>
  <head>
   <body>
		 25. Ваше задание создать массив, наполнить это случайными
		 значениями (функция rand), найти максимальное и минимальное
		 значение и поменять их местами.<br><br>

     РЕШЕНИЕ:<br><br>

		 $arr = [];<br>
		 $minIndex = 0; //хранение индекса минимального єлемента<br>
		 $maxIndex = 0; //хранение индекса максимального єлемента<br>
		 array_push($arr, rand(1, 1000), rand(1, 1000), rand(1, 1000), rand(1, 1000),<br>
		 rand(1, 1000),rand(1, 1000), rand(1, 1000), rand(1, 1000));<br>
		 $min = min($arr);<br>
		 $max = max($arr);<br>

		 echo "минимальное число: ", $min, " ";<br>
		 echo "максимальное число: ", $max, "br>";<br>
		 echo "изначальный массив: ";<br>
		 foreach ($arr as $key => $value) {<br>
			 if($value == $min){ $minIndex = $key;}<br>
			 if($value == $max){ $maxIndex = $key;}<br>
			 echo $value, " ";<br>
		 }<br>

			array_splice($arr, $minIndex, 1, $max);// меняем местами<br>
			array_splice($arr, $maxIndex, 1, $min);<br><br>

		 echo "br>", "измененный массив: ";<br>
		 foreach ($arr as $key => $value) {<br>
			 echo $value, " ";<br>
		 }<br>
		 <br><br>

		ОТВЕТ: <br>

<?php

$arr = [];
$minIndex = 0;
$maxIndex = 0;
array_push($arr, rand(1, 1000), rand(1, 1000), rand(1, 1000), rand(1, 1000),
rand(1, 1000),rand(1, 1000), rand(1, 1000), rand(1, 1000));
$min = min($arr);
$max = max($arr);

echo "минимальное число: ", $min, " ";
echo "максимальное число: ", $max, "<br>";
echo "изначальный массив: ";
foreach ($arr as $key => $value) {
  if($value == $min){ $minIndex = $key;}
	if($value == $max){ $maxIndex = $key;}
	echo $value, " ";
}

 $arr[$minIndex] = $max;
  $arr[$maxIndex] = $min;

echo "<br>", "измененный массив: ";
foreach ($arr as $key => $value) {
  echo $value, " ";
}


?>

   </body>
<html>
