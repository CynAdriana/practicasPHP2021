<!DOCTYPE html>
<html>
<head>
	<title>Operador condicional</title>
	<meta charset="utf-8">
</head>
<body>
		<?php
			//Nos devuelve un valor
		$total = 1234;
		$tipoCambio = 0;

		//
		$granTotal = ($tipoCambio>0)? $total * $tipoCambio : $total;
		$cadena = ($tipoCambio>0)? ", tipo de cambio ".$tipoCambio : "";
		echo "El gran total del pedido es ".$granTotal.$cadena;
		echo "<br>";
		?>
		<title>Ejercicios operador condicional</title>
		<?php

			$a = 1;
			$b = 5;

			$numMayor = ($a > $b)? "El mayor de los numero es " .$a : "El mayor de los numeros es" .$b;
			echo $numMayor;
			echo "<br>";

			echo "<p>Segundo ejercicio</p>";

			$pesoVehiculo = 1000;
			$pesoPermitido = 10000;

			if ($pesoVehiculo > $pesoPermitido) {
				echo"El peso mayor permitido es de ".$pesoPermitido;
			}elseif($pesoVehiculo < $pesoPermitido){
				echo"El peso menos pernor es de ".$pesoPermitido;
			}
			


		?>




</body>
</html>