<?php
$destino="francoandes12@gmail.com";
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$ciudad=$_POST["ciudad"];
$mensaje=$_POST["textarea2"];
$contenido = "Nombre " + .$nombre + "Apellido " + .$apellido + "telefono " + .$telefono + "ciudad " + .$ciudad + 
"email " + .$email + "mensaje: " + .$mensaje;
mail($destino,"Contacto de prueba",$contenido);
header("Location:index.html");
?>