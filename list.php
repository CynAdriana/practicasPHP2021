<?PHP
//Array no es una funcion, es un constructor igual que list() se utiliza para asignar una lista de vriables en una sola operacion 
/* 
list() no funcina con arrays numericos y supone que los indices numericos emepiezan en 0
Existe un cambio en php5 y 7 
*/
$info = array("guayaba","Psidium","Murtaceae","del Caribe");
list($nombre, $cientifico, $familia, $origen)  = $info;  //Asignar list 

print "la ".$nombre." (".$cientifico.") son un genero de unas cien especies de arboles tropicales y arboles pequeños en la familia ".$familia.", nativas ".$origen.".<br>";



?>