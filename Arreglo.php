<?php
echo "<p>Arreglos hay 3 formas de hacer arreglos</p>";


//opcion 1 
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio", "Agosto","Septiembre", "Octubre");
//opcion 2
$dias[] ="Lunes";
$dias[] ="Martes";
$dias[] = "Miercoles";
$dias[] = "Jueves";
$dias[] = "Viernes";;
$dias[] = "Sabado";

//opcion 3 
$nombre[0] = "Cynthia";
$nombre[1] = "Ana";
$nombre[2] = "Max"; 

echo "<p> El cumple de ".$nombre[0]." es en ".$meses[9]." del dia ".$dias[5]."</p>";

foreach ($dias as $key => $value) {
	echo "<p>el campo ".$key." tiene como valor ".$value."</p>";
}
?>