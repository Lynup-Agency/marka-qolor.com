<?php

$EmailFrom = "formadecontacto@marka-mexico.com";
$EmailTo = "rotarypot@gmail.com";
$Subject = "Forma de contacto - Marka-Mexico.Com";


// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $_POST['name'];
$Body .= "\n";
$Body .= "Correo Electrónico: ";
$Body .= $_POST['email'];
$Body .= "\n";
$Body .= "Compañia: ";
$Body .= $_POST['company'];
$Body .= "\n";
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= "\n";
$Body .= $_POST['message'];

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

?>