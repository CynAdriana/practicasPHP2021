<?php

$meses = array("Enero","Febrero","Abril","Mayo");

$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miercoles";
$dias[] = "jueves";
$dias[] = "Viernes";

$empleados[0] = "Cynthia";
$empleados[1] = "fanny";
$empleados[2] = "Leo";
$empleados[3] = "Edson";


//Desordena los elementos del arreglo
shuffle($empleados);
foreach ($empleados as $key => $value) {
	echo "<li>".$value."</li>";
}
echo "</ul>";

$examen = array_rand($empleados, 2);
foreach ($examen as $key => $value) {
	echo "<li>".$value."</li>";
}
echo "</li>";


?>