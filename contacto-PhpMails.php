<?php 
// Si se realiza un envio al metodo POST ... ->
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header ("Location: index.html");
}
// Le digo que busque la clase PHPmailer, la clase que detecta los errores (Exception) y para configurar el server SMTP.
require 'PhpMailer\src\PHPMailer.php';
require 'PhpMailer\src\Exception.php';
require 'PhpMailer/src/SMTP.php';
// Le digo que use la funcion 
use PHPMailer\PHPMailer\PHPMailer;

// Creo un nuevo objeto con la clase para enviar el correo
$mailer = new PHPMailer();

$nombre  = $_POST['nombre'];
$asunto  = $_POST['asunto'];
$email   = $_POST['email'];
$mensaje = $_POST['mensaje'];
    
// Cuerpo del mensaje con html
$body = <<<HTML
        <h1>Contacto desde la web</h1>
        <p>De: $nombre / $email</p>
        <h2>Mensaje</h2>
        $mensaje
    HTML;


// Funciones de la clase :
    // De quien es el mensaje
    $mailer->setFrom($email, "$nombre"); 
    // el correo qe va a resibir el mensaje
    $mailer->addAddress('alan_zablosky@hotmail.com','AlanZablosky_Porfolio'); 
    // Propiedades de la clase
    $mailer->Subject = "Mensaje web: $asunto";
    // Funcion para que lea HTML
    $mailer->msgHTML($body);
    // Funcion para que si el navegador no lee HTML
    $mailer->AltBody = strip_tags($body);
    // Para que lea la bien el contenido
    $mailer->CharSet = 'UTF-8';
    // Variable de envio
    $rta = $mailer->send( );

//var_dump($rta);

if (!$rta) {
    echo 'Mailer Error: ' . $mailer->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>z