<?php 


echo "<p>Ciclo foreach</p>";
echo "<p>Se utiliza en arreglos o en objetos</p>";


$colores  = array("rosa","verde","amarillo","morado","azul","rojo");

foreach ($colores as $key => $value) {
	echo "<p>el campo ".$key." tiene como valor ".$value."</p>";
}

?>