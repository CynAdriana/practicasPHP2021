<?PHP
$nombre = "Cyn";
$apellidoP = "Rod";

function saludo(){
	return "hola ".$GLOBALS['nombre']." ".$GLOBALS['apellidoP'];
}


echo saludo();
echo $_SERVER["PHP_SELF"]."<br>"; //RUTA DESDE LA RAIZ DEL ARCHIVO 
echo $_SERVER["SERVER_NAME"]."<br>"; //NOMBRE SERVIDOR 
echo $_SERVER["HTTP_HOST"]."<br>";//NOMBRE DEL HOST 
echo $_SERVER["HTTP_REFERER"]."<br>";//NOMBRE DEL SERVIDOR 
echo $_SERVER["SCRIPT_NAME"]."<br>"; //RECUPERA LA RUTA AL ARCHIVO ENLACE 
echo $_SERVER["HTTP_USER_AGENT"]."<br>";//RECUPERA EL TIPO DE NAVEGADOR DEL CLIENTE 


?>