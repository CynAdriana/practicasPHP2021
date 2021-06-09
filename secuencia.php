<?php

$nombre = "Cyn Rod";
$edad = "24";
$cantante_fav = "Justin bieber<br>";

//Separar
echo $nombre." ".$edad.", ".$cantante_fav;
// echo $edad;
// echo $cantante_fav;

//concatenar .=
$nombre = "Cyn";
$agente = "Rod007";
$titulo = "A su servicio";
$salida = $nombre. " Nombre de agente:<br>";
$salida .= $agente."
.<br>";
$salida .= $titulo;
 echo $salida;


?>