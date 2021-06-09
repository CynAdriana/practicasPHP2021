<?php
echo "<p>Banderas</p>";

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

$calificaciones = array(66,28,71,86,100);


//Orden ascendente
sort($meses);
foreach ($meses as $key => $value) {
	print "<p>meses[".$key."] = ".$value."</p>";
}
echo "<br>";

//Ordena por medio de las mayusculas(primero) y minisculas(segundo)
sort($empleados);
foreach ($empleados as $key => $value) {
	echo "<p>Alumons[".$key."] = ".$value."</p>";
}
echo "<br>";
sort($empleados, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($empleados as $key => $value) {
	echo "<p>Alumons[".$key."] = ".$value."</p>";
}
//compara numeros de forma numerica
echo "<br>";
sort($calificaciones, SORT_NUMERIC);
foreach ($calificaciones as $key => $value) {
	echo "<p>calificaciones[".$key."] = ".$value."</p>";
}
//El sort siempre mostrara los elementos  de forma ascendente


?>