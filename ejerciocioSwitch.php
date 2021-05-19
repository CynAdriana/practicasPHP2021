<!DOCTYPE html>
<html>
<head>
	<title>Ejrcicios con Switch</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		ECHO "<p>Ejercicio 1</p>";

		$contacto = "empleados";

		switch ($contacto) {
			case 'inicio':
				echo "Bienvenido a la pag de inicio";
				break;
			case 'blog':
				echo "Controlador de la pag blog";
				break;
			case 'empleados':
				echo "Controlador de empleados";
				break;
			case 'quienes somos':
				echo "Cntrolador de quienes somos";
				break;
			case 'sitemap':
				echo "Conrolador de sitemap";
				break;
			
			default:
				echo "Lo sentimos no se encontro la página";
				break;
		}

	?>
</body>
</html>