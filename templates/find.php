<?php
echo "я покажу конкретную машину по id<br>";

//var_dump($carsCategory);

for ($j=0;$j<count($carsCategory);$j++)
		{
			$name=$carsCategory[$j]["name_car_marka"]." ".$carsCategory[$j]["name_model"];
			echo "<h1>$name </h1><br>";
			$info=$carsCategory[$j]["info"];
			echo "<h3>$info</h3><br>";
			$price=$carsCategory[$j]["name_price"];
			echo "<p>Стоимость аренды: $price руб/сут</p>";
			$deposit=$carsCategory[$j]["deposit"];
			echo "<p>Залог: $deposit</p>";
			//$value=$carsCategory[$j]["id_auto"];

			echo "<form  method='post' name='car-order' id='orderform'>
			<input  onclick='f(); return false;' type='submit' name='button' id='button' value='заказать' />
			
			
			</form>";
		}
