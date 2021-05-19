<!DOCTYPE html>
<html>
<head>
	<title>Condicionales Anidadas</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$edad =45;
		$edoCivil = "solo";

		//Si es menor a 40 años disfrutara del crucero y es casado "en compañia de su familia"
		if ($edad < 40) {
			echo "Disfrute de nuestro crucero";
			if ($edoCivil == "Casado") {
				echo "en compañia de su familia"."<br>";
			}
			echo "con descuento especial y muchas sorpresas";
			echo "<br>";
		}else{ //Si es mayor  a 40 años lo invitamos a nuestro retiro y es casado con sus seres queridos 
			print "Lo invitamos a nuestro retiro al lcampo";
			if ($edoCivil ==="Casado") {
			echo "con sus seres queridos";
			echo "<br>";
			}else{ //si es soltero 
			echo "de encotrarse con ud mismo";
			echo "<br>";
		}
		echo "en lo alto de un hemorso lago";
		echo "<br>";
	}
	echo "<br>";
	echo "Su edad es de ".$edad." y su estado civil es ".$edoCivil."";
	echo "<br>";
	?>

</body>
</html>