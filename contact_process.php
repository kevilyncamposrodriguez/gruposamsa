<?php

$to = "info@samsacr.com";
$dep = $_REQUEST['departamento'];
$tipo = $_REQUEST['tipo'];
$from = $_REQUEST['correo'];
$name = $_REQUEST['nombre'];
$date = $_REQUEST['fecha_contacto'];
$time = $_REQUEST['hora_contacto'];
if ($dep != "" && $tipo != "" && $from != "" && $name != "" && $date != "" && $time != "") {
	$cmessage = $dep . " favor contactarme el " . $date . "a las " . $time . " con relación a " . $tipo;

	$headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: " . $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$csubject = "Necesito ser contactado.";



	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	$success = mail('k.camposr05@gmail.com', 'prueba', 'hola');
	if (!$success) {
		$errorMessage = error_get_last()['message'];
	}
}


$to = "k.camposr05@gmail.com";
$subject = "Asunto del email";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = "Hola";
$success = mail($to, $subject, $message, $headers);
if (!$success) {
	$errorMessage = error_get_last();
	print($errorMessage);
}
