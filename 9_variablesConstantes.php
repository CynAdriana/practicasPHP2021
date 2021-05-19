<!DOCTYPE html>
<html>
<head>
	<title>Variables de variables y contantes</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$cdmx = 22000000;
		$guadalajara = 4000000;
		$monterrey = 1400000;
		
		//variable de variables(una variable para llamar otra varible)
		$ciudad = "cdmx";
		echo "<p>La ciudad es $ciudad tiene una población de ${$ciudad}</p>";
		$ciudad = "guadalajara";
		echo "<p>La ciudad de $ciudad tiene una poblacion de ${$ciudad}</p>";
		$ciudad = "monterrey";
		echo "<p>La ciudad de $ciudad tiene una población de ${$ciudad}</p>";

		//constantes 
		define("TASA_CAMBIO", 18.35);//constante  
		$deuda = 12345;
		echo "Tu deuda en dolares en de ".($deuda*TASA_CAMBIO);
	?>
</body>
</html>
