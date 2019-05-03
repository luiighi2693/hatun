<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 1/5/2019
 * Time: 12:48 PM
 */

//use PHPMailer\PHPMailer\PHPMailer;
//
//$para = "luiscarvajal2693@gmail.com";
//$asunto = "Mensaje de prueba";
//$mensaje = "Esto es un mesaje de prueba.";
//
//print $para;
//print $asunto;
//print $mensaje;
//
//$mail = new PHPMailer;
//print $mail;
//$mail->IsSMTP(); // Le indicamos a la clase que usaremos SMTP
//$mail->Host = "smtp.office365.com";
//$mail->Port = 587;
//$mail->SMTPSecure = "tls";
//$mail->SMTPAuth = true;
//// Tu usuario de correo y contraseña
//$mail->Username = "sic@hatunsol.com.pe";
//$mail->Password = "Hatun0310";
//// Envío
// $mail->From = "sic@hatunsol.com.pe"; // Email de origen
//$mail->FromName = "Tu nombre"; // Nombre del que envia
//$mail->AddAddress($para); // Email de destinos
////$mail->addReplyTo("correo@electronico.es");
//$mail->SMTPDebug = 2;
//// Mensaje $mail->WordWrap = 50; // Máxima longitud de las líneas
//$mail->IsHTML(true); // Habilitamos el uso de HTML
//$mail->Subject = $asunto;
//$mail->Body = $mensaje;
//
//


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
//    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//    $mail->isSMTP();                                            // Set mailer to use SMTP
//    $mail->Host       = 'smtp.office365.com';  // Specify main and backup SMTP servers
//    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//    $mail->Username   = 'sic@hatunsol.com.pe';                     // SMTP username
//    $mail->Password   = 'Hatun0310';                               // SMTP password
//    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
//    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sic@hatunsol.com.pe', 'Mailer');
    $mail->addAddress('luiscarvajal2693@gmail.com', 'Joe User');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

//    $mail->AddAttachment($_FILES['uploaded_file'])
    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'], $_FILES['uploaded_file']['name']);

//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//header("Location: home.html");
//die();