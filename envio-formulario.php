<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario
//aca va el correo al va a llegar el mensaje
$destino="esteban3261@gmail.com";
// aca ira el url de la pagina de donde se envio el correo
$asunto="Consulta enviada desde www.solucionesmacgyber.com";

$mensaje.="Tu Nombre es: ".$nombre_usuario."\r\n";
$mensaje.="Tu Email es: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";
// este es solo un correo de prueba no tenemos que poner nada en el campo del remitente
$remitente="From: esteban3261@gmail.com";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
