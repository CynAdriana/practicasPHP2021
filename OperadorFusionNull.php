<?php

//Si resivimos el usuario con GET lo tomamos de lo contrario si lo resivimos por POST es anonimo 
$usuario = $_GET["usuario"]??$_POST["usuario"]??"Anonimo";
print $usuario;

$1enlace = "hi";
echo $1enlace;
?>