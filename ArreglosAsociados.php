<?php

echo "<p>Arreglos asociados</p>";

$empleado = array('nombre' => 'Fernando',
				  'ApellidoP'=> 'Zuñiga',
				  'Edad' => 25,
				  'numEmpleado' => 1);
echo "<p>El nombre es ".$empleado['nombre']." y su edad es de ".$empleado['Edad']."</p>";

foreach ($empleado as $key => $value) {
	echo "<p>El valor de la llave ".$key." y valor ".$value."</p>";
}

$alumno["nombre"] = "Pedro";
$alumno["ApellidoP"] = "Ramirez";
$alumno["ApellidoM"] = "Perez";

foreach ($alumno as $key => $value) {
	echo"<p>el valor de la propiedad ".$key." y el valor ".$value."</p>";
}
//si esta dentro de las comillas no es necesario ponerle comillas y si esta afuera si se le pone comillas
echo "<p>El nombre del empleado es $empleado[nombre],".$empleado['ApellidoP']."</p>";

?>