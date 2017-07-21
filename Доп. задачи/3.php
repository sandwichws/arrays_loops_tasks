<!doctype html>

<html>
	<head>
		<title>Доп Задание 3</title>
  <head>
   <body>
		 Доп ЗАДАЧА 3. Дан текст. Определить какая из двух
		 заданных букв встечается чаще.
<br><br>

     РЕШЕНИЕ:<br><br>
		 foreach ($letters as $key => $value) {<br>
		 	if($value == $varA){$varAcount ++; }<br>
		 	if($value == $varI){$varIcount ++; }<br>
		 }<br>
		 if($varAcount > $varIcount){ echo "Буква 'a' встречается чаще";}<br>
		 if($varIcount > $varAcount){ echo "Буква 'i' встречается чаще";}<br>
		 if($varIcount == $varAcount){ echo "Буква встерчаются одинаково часто";}<br>
		 ?><br>


		ОТВЕТ: <br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
		Curabitur in lectus vitae ligula faucibus pulvinar. Aenean lobortis,<br>
		ex eget consectetur suscipit, urna nisi imperdiet tortor, vel cursus<br>
		ligula enim at tellus. In vel dictum arcu. Etiam eu purus pretium,<br>
		sollicitudin sem et, efficitur augue. Vivamus volutpat velit arcu.<br>
<br>
<?php

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Curabitur in lectus vitae ligula faucibus pulvinar. Aenean lobortis,
ex eget consectetur suscipit, urna nisi imperdiet tortor, vel cursus
ligula enim at tellus. In vel dictum arcu. Etiam eu purus pretium,
sollicitudin sem et, efficitur augue. Vivamus volutpat velit arcu.";

$varA = "a";
$varI = "i";
$varAcount = 0;
$varIcount = 0;
$letters = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);

foreach ($letters as $key => $value) {
	if($value == $varA){$varAcount ++; }
	if($value == $varI){$varIcount ++; }
}
if($varAcount > $varIcount){ echo "Буква 'a' встречается чаще";}
if($varIcount > $varAcount){ echo "Буква 'i' встречается чаще";}
if($varIcount == $varAcount){ echo "Буква встерчаются одинаково часто";}
?>
   </body>
<html>
