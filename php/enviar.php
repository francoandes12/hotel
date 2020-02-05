<?php
$destino="francoandes12@gmail.com";
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$ciudad=$_POST["ciudad"];
$mensaje=$_POST["textarea2"];

mail($destino,"Contacto de prueba",$mensaje,$nombre);
?>