<!doctype html>

<html>
	<head>
		<title>Задание 1</title>
  <head>
   <body>
     1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
     С помощью цикла foreach выведите эти слова в столбик.<br>
   </body>
<html>

<?php
$arr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($arr as $value) {
  echo "$value <br/>";
}
?>
