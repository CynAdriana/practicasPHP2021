<?php

$empleado = array(
			"nombre" => "Cyn",
			"ApellidoP" => "Rod",
			"edad" => 24,
			"num" => 84);
// echo "<p>Nombre ".$empleado["nombre"]."</p>";
// foreach ($empleado as $key => $value) {
// 	echo "<p>el valor de la propiedad es ".$key." y el valor ".$value."</p>";
// }
asort($empleado);
foreach ($empleado as $key => $value) {
	echo "<p>el valor de la propiedad es ".$key." y el valor ".$value."</p>";
}


?>