<?php
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Pertenece a la empresa: " . $empresa . " \r\n";
$message .= "Tiene el cargo de: " . $cargo . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jcervero@reinventa.cl';
$asunto = 'Nuevo mensaje de la pagina web';

$secretkey = "6LcJQlsaAAAAAG9FEG5f2QVK9usfo5pN8EzwsrgT";
$responsekey = $_POST['g-recaptcha-response'];
$UserIP = $_SERVER['REMOTE_ADDR'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$UserIP";

$response = file_get_contents($url);
$response = json_decode($response);

if ($response->success)
{
	mail($para, $asunto, utf8_decode($message), $header);
	echo"Mensaje enviado exitosamente";
}
else {
	echo"Captcha invalido, por favor intente nuevamente";
}


header("Location:contacto.html");
?>