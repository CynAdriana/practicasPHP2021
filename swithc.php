<!DOCTYPE html>
<html>
<head>
	<title>Sentencia switch</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 
		$estado = "soltera";
		echo "Lo invitamos a un viaje por el Amazonas";

		switch ($estado) {
			case 'soltero':
			case 'soltera':
				echo "donde podrá conocer otras personas como ud" ."<br>";# code...
				break;
			case 'casado':
				echo "convivir con su familia" ."<br>";;
				break;
			case 'divorciado':
				echo "para olvodar sus problemas" ."<br>";
				break;
			case 'viudo':
				echo "donde podra refexionar en sus mejores recuerdos" ."<br>";
				break;
			case 'es complicado':
				echo "donde podra simplificar su vida" ."<br>";
				break;
			
			default:
				echo "Donde podrá definir si vida" ."<br>";
		}
		echo "en una extraordinaria aventura de dos semanas, todo incluido";


	?>

</body>
</html>