<?php 
// INGRESE EL EMAIL DONDE RECIBIRÁ LOS DATOS DEL FOMULARIO
$para = '#';  //Hay que añadir un correo

$asunto = $_POST["tipo"]; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Nombre: ".$_POST["nombre"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Telefono: ".$_POST["telefono"]."<br>"; 
$MESSAGE_BODY .= "Tipo de contacto: ".$_POST["tipo"]."<br>";
$MESSAGE_BODY .= "Mensaje: ".nl2br($_POST["mensaje"])."<br>"; 
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Formulario !"); 

//MODIFICAR A LA DIRECCIÓN EN SU SERVIDOR, NO FUNCIONA HASTA QUE NO SE ENCUENTRE SUBIDO
header( 'Location: http://www.huancavelicasur.org/new/contacto2.html' )
?>