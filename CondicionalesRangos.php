<!DOCTYPE html>
<html>
<head>
	<title>Condicionales Rangos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$edad = 10;

		if ($edad <= 20) {
			echo "<p>Te regalamos boletos para el cine</p>";
		}
		if ($edad > 20 && $edad <= 30) {
			echo "<p>Te regalamos boltetos para Ariana Grande</p>";
		}
		if ($edad > 30 && $edad >=40) {
			echo "Te regalamos boletos para el teatro";
		}if ($edad > 50) {
			echo "Te regalomos boletos para la opera";
		}


	?>

</body>
</html>