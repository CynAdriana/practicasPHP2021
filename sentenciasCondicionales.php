<!DOCTYPE html>
<html>
<head>
	<title>Condicionales</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$edad = 24;
		if ($edad<18) {
			echo "<p>Lo sentimos no puedes entrar a nuestra pagina</p>";
		}else if($edad > 40){
			echo "Lo sentimos, nuestra pagina puede ser peligrosa para tu edad";
		}else if($edad == 24){
			echo "<p>Bienvenido eres el usuario perfecto</p>";
		}else{
			echo "<p>Bien venido a la pagina</p>";
		}
	?>

</body>
</html>