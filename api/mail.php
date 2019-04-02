<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require("class.smtp.php");
require("class.phpmailer.php");

//tener en cuenta salto de linea.
$contactanos = html_entity_decode(filter_var($_POST['contactanos'], FILTER_SANITIZE_SPECIAL_CHARS));
$categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$place = filter_var($_POST['residencia'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
$celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);

// O Utilizar 
// $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);

header('Content-Type: application/json');

$data = [ 'code' => 0, 'message' => '' ];

if(!isset($_POST)) {
    die;
}

// Valores enviados desde el formulario
if (    !isset($name) || !isset($place) || !isset($email) 
    ||  !isset($contactanos) || !isset($celular) || !isset($categoria)) {
    $data['code']    = 500;
    $data['campos']  = ' Contactanos: ' . $contactanos 
                     . ' Categoria: '   . $categoria 
                     . ' Name: '        . $name 
                     . ' Place: '       . $place 
                     . ' Email: '       . $email 
                     . ' Celular: '     . $celular;
    $data['message'] = 'Campos incompletos';
    echo json_encode( $data );
    die;
}

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

// SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Host = "c0990242.ferozo.com"; 

// Correo completo a utilizar
$mail->Username = "comunicacion@sergiomassa.com.ar"; 
$mail->Password = "6*@S*WL5eZ1"; // Contraseña
$mail->Port = 465; // Puerto a utilizar
$mail->SMTPSecure = 'ssl';
$mail->CharSet = "utf-8";


$mail->From = "comunicacion@sergiomassa.com.ar"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Sergio Massa - Sitio principal";
$mail->AddAddress("comunicacion@sergiomassa.com.ar"); // Esta es la dirección a donde enviamos

//$mail->AddCC("Copia@Copia.com");
//$mail->AddBCC("CopiaOculta@CopiaOculta.com");

// El correo se envía como HTML
$mail->IsHTML(true); 

// Este es el asunto
$mail->Subject = $name . " contacto por " . $categoria; 

$body = "Contacto por: " . $categoria .
        "<br/>Nombre: "  . $name    . " <br/>Lugar: " . $place  . 
        "<br/>Email: "   . $email   . 
        "<br/>Celular: " . $celular . 
        "<br/>Dijo: "    . $contactanos;

$mail->Body = $body; // Mensaje a enviar
//$mail->AltBody = "Hola mundo. Esta es la primer línean Acá continuo el mensaje"; // Texto sin html
//$mail->AddAttachment("imagenes/imagen.jpg", "imagen.jpg");

$exito = $mail->Send(); // Envía el correo.

if($exito) {
    $data['code']    = 200;
    $data['message'] = '¡Muchas gracias! Pronto nos pondremos en contacto.';
} else {
    $data['code']    = 500;
    $data['message'] = 'Hubo un error al guardar el mensaje, reintenta en unos minutos.';
}
echo json_encode( $data );
?>