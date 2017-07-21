<!doctype html>

<html>
	<head>
		<title>Задание 6</title>
  <head>
   <body>
    6. Дан массив $arr. С помощью цикла foreach запишите
		английские названия в массив $en, а русские — в массив $ru.
		$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
		$en = array('green', 'red','blue');
		$ru = array('зеленый', 'красный', 'голубой');.<br><br>
    РЕШЕНИЕ:<br>

		$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];<br>
		$en = [];<br>
		$ru = [];<br>

		foreach ($arr as $key => $value) {<br>
			array_push($en, $key);<br>
			array_push($ru, $value);<br>
		}<br>

		 echo "en = "; print_r ($en) ;<br>
		 echo "ru = "; print_r($ru);<br><br>

		ОТВЕТ: <br>

	   <?php
		   $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
			 $en = [];
			 $ru = [];

			 foreach ($arr as $key => $value) {
				 array_push($en, $key);
			   array_push($ru, $value);
			 }

        echo "en = "; print_r ($en) ; echo "<br>";
				echo "ru = "; print_r($ru);
	   ?>

   </body>
<html>
