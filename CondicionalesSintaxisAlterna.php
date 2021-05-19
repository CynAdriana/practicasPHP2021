<!DOCTYPE html>
<html>
<head>
	<title>Condicionales Sintaxis alterna</title>
	<meta charset="utf-8">
</head>
<body>
		<?php
		//S e utliza para una sentencia y no es recomendable 
			$edad = 35;

			if ($edad > 40 ) echo "<p>Te refalamos boletos para la opera</p>";
			else echo "te regalamos boletos para el cine";
			echo "<br>";

			$a = 15;
			$b = 18;

			if($a > $b):
				echo $a." es mayor que" .$b;
			elseif($a < $b):
				echo $a." es menos que" .$b;
			else:
				echo $a. "es igual a " .$b;
			endif;
			

		?>
</body>
</html>