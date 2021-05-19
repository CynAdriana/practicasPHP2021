<!DOCTYPE html>
<html>
<head>
	<title>Forzar tipo de dato</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$div = 10/3;
		echo $div."<br>";
		//lo convertinos en entero 
		$entero = (int) $div;
		print $entero."<br>";
		var_dump($div)."<br>";
		var_dump($entero)."<br>";
		print intval(10/3)."<br>";
		settype($div, "integer");
		
	?>

</body>
</html>