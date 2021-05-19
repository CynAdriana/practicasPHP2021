<?php  


print <<<EOD
OPERADORES DE ASIGNACIÓN 
Los valores de asignación es de derecha a izquierda "=",
el valor de una expresion de asignacion es el calor asignado.
Es decir el valor de "$"a = 3"; es 3 <br>
EOD;


$a = 30;
$a = $a + 5 / 2 * 10;
//atajos 
$a +=10; //suma
$a /= 2; //división
$a *= 1.5; // multiplicación 
print $a; 








?>