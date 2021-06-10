<?php
//Define una constante en un array y no se pude modificar 


define('FRUTAS',["manzana","uva","cereza","sandia"]);
print "<pre>";
var_dump(FRUTAS);
ECHO "</pre>";
echo FRUTAS[2];
//FRUTAS[0]= "melon"; //Marcara un error debido a que no se pude modificar el arreglo 
?>