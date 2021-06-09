<?php

echo "<p>Funciones en arreglos</p>";

$meses = array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre",);
$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miercoles";
$dias[] = "Jueves";
$dias[] = "Viernes";
$dias[] = "Sabado";
$dias[] = "Domingo";

$empleados[0] = "Cynthia";
$empleados[1] = "Fanny";
$empleados[2] = "Leonardo";
$empleados[3] = "Edson";
$empleados[4] = "Armando";

echo "<p>Funciones</p>";
echo "<p>La funcion array_merge() junta 2 o mas arreglos</p>";
$mesesDias = array_merge($meses, $dias);
foreach ($mesesDias as $key => $value) {
	echo "<p>El elemeto es ".$key." y el valor es ".$value."</p>";
}

echo "<p>La funcion array_push agrega elementos al final del arreglo</p>";
array_push($empleados, "Marina", "Alfredo");
array_unshift($empleados, "Jazin","Marco");
array_shift($empleados);
foreach ($empleados as $key => $value) {
	echo "<p>Los id del empleado es ".$key." y el nombre de emplado ".$value."</p>";
}
echo "<p>Fucion que agrega al principio del array_unshift</p>";
array_unshift($empleados, "Jazin","Marco");
foreach ($empleados as $key => $value) {
	# code...
}
echo "<p>Fucion que quita al principio del array_shift()</p>";










?>