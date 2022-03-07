<?php
$anio=$_POST['anio'];



if (($anio % 4) && ($anio % 100 || !($anio % 400))) {
	echo "no es año bisiesto!";
}else{
	echo "es año bisiesto!";
}
?>