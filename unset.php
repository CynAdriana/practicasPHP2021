<!DOCTYPE html>
<html>
<head>
	<title>Eliminar una variable</title>
	<meta charset="utf-8">
	<p>unset() es una funcion que elimina una variable y la pone en null</p>
	<p>NULL es una variable sin valor</p>
</head>
<body>
	<?php
	$entero = 10;
	var_dump($entero);
	unset($entero);
	var_dump($entero);


	?>

</body>
</html>