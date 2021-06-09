<?php

echo "<p>Sentencias Break y Continue</p>";


for ($i=0; $i < 10 ; $i++) { 
	if ($i ==7) {
		echo "<p>El numero magico es ".$i."</p>";
		//aqui tenmina el ciclo
		break;
	}
	echo "<p>El valor de i es ".$i."</p>";
}
echo "<p>Fin del ciclo</p>";
echo "<br>";

//muestra numeros impares

for ($i=0; $i < 10; $i++) { 
	//el 0 es impar 1 es par
	if ($i%2==0) Continue;
	 echo "<p>El valor de i es: ".$i."</p>";
}
echo "<p>Fin del ciclo2</p>";

//ejemplo 3 

for ($i=0;  ; $i++) { 
	//el 0 es impar 1 es par
	if ($i < 10) break;
	//Si se quita el brake se hace un ciclo infinito
	 echo "<p>El valor de i es: ".$i."</p>";
}
echo "<p>Fin del ciclo3</p>";


?>