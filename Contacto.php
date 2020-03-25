<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "info@sickstudio.com";
$asusto = "CONTACTO PAGINA WEB";
$headers .= "from:".$email."\n";

$texto ="Nombre: ".$nombre;
$texto .="\n\nEmail: ".$email;
$texto .="\n\nTelefono: ".$telefono;
$texto .="\n\nmensaje: ".$mensaje;

mail($destinatario, $asusto, $texto, $headers);

?>