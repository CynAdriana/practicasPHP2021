<?php 
//variabloes tipo entero :

Echo "Numeros enteros<br>";
$num1 = 12345678;
$num2 = -12345678;
$num3 = 0123456; //octal 0-7
$num4 = 0xFFAADD; //Hexadecimal 0-9 a-f
$num5 = 0b1010101; //binario 0-1

$num6 = 2147483648;
print var_dump($num1); //dice tipo de dato
print var_dump($num2);
print var_dump($num4);
print var_dump($num5);
print var_dump($num6)."<br>";

echo "<br>";
ECHO "Numero decimales(float)<br>";

$a = 1234.5678;
$b = 12345.2e4; // e a la 4 
$c = 7E-10; //representacion cientifica

$e = 1.123456789;
$d = 1234567890;
$epsilon = 0.00001;
if(abs($e-$d)<$epsilon)
print "Son iguales";
else print "Son diferentes";

echo "<br>";
echo "Tipo booleano (TRUE/FALSO)";
echo "<br>";
echo "0 es false, diferente de 0 es true";
echo "<br>";


$admin = 1;
if($admin){
	print("Bienvenido");
}else{
	print "No tiene acceso al sistema";
}

?>