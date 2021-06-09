<?php 

//Desardenar un arreglo 
/*
la funcion shuffle() mezcla un arreglo (crea un orden aleatorio de sus elementos). Ultiliza un generados de numerod seudo aleatorios.

nos trae un valor boolean si es TRUE

no tiene el mismo orden si no un orden aleatorio

funcion: array_rand()->Decimos cuantos elementos nos mostrara y se veran aleatoriamente en un arreglo o una variable.
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arreglos desordenados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		//Formas de hacer un arreglo 
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio");
	//Arreglo tipo 2
	$dias[]="Lunes";
	$dias[]="Martes";
	$dias[]="Miercoles";
	$dias[]="Jueves";
	$dias[]="VIernes";

	//Arreglo tipo 3 
	$empleado[0] = "Edson"; 
	$empleado[1] = "Armando";
	$empleado[2] = "Leonardo";
	$empleado[3] = "Fanny";

	//Desorden de Arreglos
	shuffle($empleado);
	foreach ($empleado as $key => $value) {
		echo "<li>".$value."</li>";
	}
	echo "</ul>";

	//Extraer cierta info del arreglo
	//Extrae 2 empleados al azar(aleatorio) solo muestra la posicion (array, numero de elementos)
	$examen = array_rand($empleado, 2); 

	foreach ($examen as $key => $value) {
		echo "<li>El examen los va a realizar el numero;".$value." nombre:".$empleado[$value]."</li>";
	}
	echo "</ul>";

	?>

</body>
</html>