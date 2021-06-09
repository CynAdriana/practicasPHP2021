<?php

//each() Devuelve el par clave/valor actual de un arreglo y avanza el cursor de arreglo 



//reset() Establece el puntero interno de un arreglo a su primer elemento 




echo "<h3>Arreglos, Funciones de ubicacion</h3>";

//current() Devuelve el elemento 0 (primero)
$meses= array("Enero","Febrero","Marzo","Abril","Mayo", "Junio", "Julio","Agosto");
//current() Devuelve el elemento 0 (primero)
echo current($meses)."<br>";
//next() siguiente elemento del arreglo 
echo next($meses)."<br>";
//prev() Valor anterior el puntero interno del arreglo (anterior)
echo prev($meses)."<br>";
//end() Establece el puntero interno de un arreglo a su ultimo valor 
echo end($meses)."<br>";
echo current($meses);
echo reset($meses);

echo "<br>";
echo each($meses);





?>