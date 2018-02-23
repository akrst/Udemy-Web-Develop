<?php
	$name = "victor";

	function my_car(){
		$name = "mercedes";
		echo $name; //Functionの中ではFunction内に定義した変数しか使えない
	}

	my_car();

echo $name;　//Function外で定義した変数は、Function内で同名のFunctionが定義されても、値は変化しない

 ?>