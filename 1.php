<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$tconsulta = $_POST['tconsulta'];
$consulta = $_POST['consulta'];

$formcontent="
    Nombre: $nombre \n
    Correo electronico: $email \n
    Telefono: $telefono \n
    Tipo de consulta: $tconsulta \n
    Consulta: $consulta.
";

$recipient = "hmpduran@hotmail.com, bm.duran1@gmail.com";

$subject = "Consulta via web | Veterinaria Duran de $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>