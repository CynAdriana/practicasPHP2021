<!DOCTYPE html>
<html>
<head>
	<title>Ordenar arreglos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$cal = array(20,10,66,20,32,56,69,79,85,100);
		sort($cal);
		//var_dump($cal); dice tipo de variable
		//sort() ordena un arreglo en orden ascendente
		foreach ($cal as $key => $value) {
			echo "<p>Calificaciones [".$key."] = ".$value."</p>";
		}
		echo "<br>";
		echo "<hr>";

		$abc = array("A","C","D","F","B","E","H","G");
		rsort($abc);
		//rsort() ordena un arreglo en orden descendente
		foreach ($abc as $key => $value) {
			echo "<p>$value</p>";
		}
		echo "<hr>";

		$num = array(10,"Hola",60,"Adios",90,100);
		//asort() ordena un arreglo asociado en orden ascendente segun un valor 
		asort($num);
		foreach ($num as $key => $value) {
			echo "$value<br>";
		}
		echo "<br>";
		echo "<hr>";
		$num2 = array(10,"Rod",60,"Cyn",90,100);
		//arsort() ordena un arreglo asociado en orden descendente según el valor  
		arsort($num2);
		foreach ($num2 as $key => $value) {
			echo "$value<br>";
		}
		echo "<hr>";

		$a = array("Hello","Hi", 25, 24);
		krsort($a);
		foreach ($a as $key => $value) {
			echo "<p>$value</p>";
		}
		echo "<hr>";
		//krsort() ordena un arreglo asciado en orden descendente segun un llave 
		$empleado = array(
					"nombre" => "Cyn",
					"Amaterno" => "Martinez",
					"Edad" => 24,
					"Puesto" => "Desarrolladora Jr");
		krsort($empleado);
		foreach ($empleado as $key => $value) {
			echo "<p>El valor de la propiedad ".$key." es de: ".$value."</p>";

			}
		echo "<hr>";
		//ksort() ordena un arreglo asociado en orden ascendente segun la llave
		$empleado2 = array(
					"nombre" => "Cyn",
					"Amaterno" => "Martinez",
					"Edad" => 24,
					"Puesto" => "Desarrolladora Jr");
		ksort($empleado2);
		foreach ($empleado2 as $key => $value) {
			echo "<p>El valor de la propiedad ".$key." es de: ".$value."</p>";

			}
		
	?>

</body>
</html>