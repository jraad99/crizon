<?php

$nombre   = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail     = $_POST['mail'];
$mensaje  = $_POST['mensaje'];

if(mail('jose.raad@tallion.com', $nombre, $telefono, $mail, $mensaje))
{
  echo "Tu mensaje a sido enviado";
}
else{
  echo "algo salió mal :(";
}

 ?>
