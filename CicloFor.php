 <?php

echo "<p>Ciclo FOR</p>";

echo "<li>";
for ($i=0; $i < 10 ; $i++) { 
	echo "<li> El valor de i es:".$i."</li>";
}
echo "</li>";

echo "<li>";
for ($i=20; $i >0 ; $i--) { 
	echo "<li> El valor de i es:".$i."</li>";
}
echo "</li>";

echo "<li>";
for ($i=0, $j=0; $i <= 10 ; $i--, $j++) { 
	echo "<li> El valor de i es:".$i.",  El valor de j es:".$j."</li>";
	
}
echo "</li>";

 ?>