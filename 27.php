<!doctype html>

<html>
	<head>
		<title>Задание 27</title>
  <head>
   <body>
		 27. Создать генератор случайных таблиц. Есть переменные:
		 $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
		 Есть список цветов, в массиве: $colors = array('red','yellow','blue',
		 'gray','maroon','brown','green'). Необходимо создать скрипт, который
		 по заданным условиям выведет таблицу размера $rows на $cols, в которой
		 все ячейки будут иметь цвета, выбранные случайным образом из массива
		 $colors.  В каждой ячейке должно находиться случайное число.<br><br>

     РЕШЕНИЕ:<br><br>
		 $row = 10;<br>
		 $cols = 10;<br>
		 $colors = ['red','yellow','blue',<br>
		 'gray','maroon','brown','green'];<br>
		 ?><br>

		 table border="1"><br>

		 ?php for($r = 0; $r < $row; $r ++):?><br>

		 tr><br>
		   ?php for($c = 0; $c < $cols; $c ++):<br>
		 		$clrRand = rand(0, 6);  ?> <br>
		     td bgcolor="?php echo $colors[$clrRand]; ?>"> ?php  echo rand(1, 99); ?> /td><br>
		   ?php endfor ?><br>
		 /tr><br>
		 ?php endfor ?><br>


		ОТВЕТ: <br>

<?php

$row = 10;
$cols = 10;
$colors = ['red','yellow','blue',
'gray','maroon','brown','green'];
?>

<table border="1">

<?php for($r = 0; $r < $row; $r ++):?>

<tr>
  <?php for($c = 0; $c < $cols; $c ++):
		$clrRand = rand(0, 6);  ?>
    <td bgcolor="<?php echo $colors[$clrRand]; ?>"> <?php  echo rand(1, 99); ?> </td>
  <?php endfor ?>
</tr>

<?php endfor ?>
</table>

   </body>
<html>
