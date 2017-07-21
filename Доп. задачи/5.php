<html>
	<head>
		<title>Доп Задание 5</title>
  <head>
   <body>
		 Доп ЗАДАЧА 5. Определить является ли строка
		 правильной записью целого числа.
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

$text = "-1888887";
$normal = ['0', '1', '2', '3', '4', '5','6', '7', '8','9',
 '-1', '-2', '-3', '-4', '-5','-6', '-7', '-8','-9'];


$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);


foreach ($letters as $key => $value) {
  foreach ($normal as $key2 => $value2) {
    if($key == 0 && $value == "-"){break;}
		if($value == $value2){ break;}
		if($value2 == end($normal)){ echo "запись неправильна!";  break 2; }
  }
	if($value == end($letters)){ echo "запись правильна!"; break; }


}



?>
   </body>
<html>
