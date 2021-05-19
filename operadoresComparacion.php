<?php
echo "Igual<br>";
$a = 10;
$b = "10<br>";

print $a == $b."<br>";

echo "Identico<br>";
$c = 20;
$d = 20;

if($c === $d){
	echo "Son iguales y son del mismo tipo";
}else{
	echo "No son del mimos tipo";
}

echo "<p>Operadores diferencia</p>";
$e = 8;
$f = "8";
if($e <> $f){
	echo "son diferentes";
}else{
	echo "son iguales";
}
echo "<p>Mayor, menor, igual</p>";
$g = 10;
$h = 11;

if($g > $h){
	echo "g es mayo que h";
}else{
	echo "g no es mayor que h";
}






?>