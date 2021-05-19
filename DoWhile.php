<?php 

Echo "<p>Ciclo Do while</p>";

$numero = 8;
$binario = "";


//convertir un num decimal a un numero binario
do{
	//el residuo del numero 	
	$d = $numero % 2;
	//concatenar de forma inversa
	$binario  = $d.$binario;
	$numero = intval($numero/2);

}while ($numero >= 2);
		//cuando llegue a 1 o 0 termina(false)
	$binario = $numero.$binario;
	echo "<p>El numero binario es de ".$binario."</p>";



?>