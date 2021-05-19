<?php
/*
El ciclo WHILE son sentencias condicionales si la condicion es verdadera se repite el ciclo hasta que resulte (Se hace una pregunta se deteniene hasta que sea falso )
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ciclo While</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$contador = 8;
	$veces = 100;
	echo "<p>Se van a vizualizar ".$veces." numeros</p>";

	while ($contador < $veces) {
		echo "<p>Numero:  ".$contador." </p>";
		$contador++;
	}
	echo "<p>Fin del ciclo el contado tiene el valor de ".$contador."</p>";




	?>

</body>
</html>


