<?php
$destino = "carlosfalla_123@hotmail.com";

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$lemessage = $_POST["lemessage"];

$contenido = "Nombre: " . $prenom . "\nApellido: " . $nom . "\nCorreo: " . $email . "\ntelefono: " . $tel . "\nMensaje :" . $lemessage;

mail($destino, "Contacto", $contenido);
header("Location:index.html");





// $header = 'From: ' . $email . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

// $lemessage = "Este mensaje fue enviado por: " . $prenom . " \r\n";
// $lemessage .= "Su e-mail es: " . $email . " \r\n";
// $lemessage .= "Teléfono de contacto: " . $tel . " \r\n";
// $lemessage .= "Mensaje: " . $_POST['lemessage'] . " \r\n";
// $lemessage .= "Enviado el: " . date('d/m/Y', time());

// $para = 'carlosfalla_123@hotmail.com';
// $asunto = 'Mensaje de PRECOMPC';

// mail($para, $asunto, utf8_decode($lemessage), $header);

// header("Location:index.html");
//  ?>