<!doctype html>

<html>
	<head>
		<title>Задание 13</title>
		<style>
      .rd{ margin-left:2.5%; letter-spacing: 11px; color: red; }
      .gr{ color: green; }
		</style>
  <head>
   <body>
    13. Вывести таблицу умножения.<br><br>
    РЕШЕНИЕ:<br>
		for($i = 2; $i < 10; $i++){ //Создание ряда красных <br>
			 -echo $i;}<br>

			-for($i2 = 2; $i2 < 10; $i2++){  //Создание столбца зеленых <br>
			---echo $i2, "&nbsp"; <br>
				 ---for($u = 2; $u < 10; $u++){  //Создание ряда ответов в столбце <br>
			      ----$res = $i2 * $u; //переменная, хранящая результат умножения<br>
						----if($res < 10){ //условие для выравнивания габаритов цифр<br>
							----echo "&nbsp", "&nbsp", $res ,"&nbsp";}else{<br>
					     ---- echo $res , "&nbsp";}<br>
					 ----if($u == 9){ echo "br>"; }//если цикл дошел до конца, переходим на
					  след строку  и делаем новый столбец<br>
				 }

		 <br><br>


		ОТВЕТ: <br>





<b class="rd">
		<?php
			for($i = 2; $i < 10; $i++){
				 echo $i;}
		?>
</b>
<br>

<?php
for($i = 2; $i < 10; $i++): ?>
<b class="gr">
<?php echo $i, "&nbsp"; ?>
</b>
<?php
	 for($u = 2; $u < 10; $u++){
      $res = $i * $u;
			if($res < 10){
				echo "&nbsp", "&nbsp", $res ,"&nbsp";}else{
		      echo $res , "&nbsp";}
		 if($u == 9){ echo "<br>";} //если доходим до 9, переходим на след строчку
	 }
?>
<?php endfor ?>
   </body>
<html>
