<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 1/5/2019
 * Time: 12:48 PM
 */


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
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sic@hatunsol.com.pe';                     // SMTP username
    $mail->Password   = 'Hatun0310';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cellphone = $_POST['cellphone'];
    $address = $_POST['address'];
    $messaje = $_POST['messaje'];
    $site = $_POST['site'];
    $dni = $_POST['dni'];

    $body = 'Nombre: '.$name."\n\n<br>
            DNI: ".$dni."\n\n<br>
            Correo: ".$email."\n\n<br>
            Celular: ".$cellphone."\n\n<br>
            Direccion: ".$address."\n\n<br>
            Distrito: ".$site."\n\n<br>
            Mensaje: ".$messaje;

    //Recipients
    $mail->setFrom('sic@hatunsol.com.pe', 'Mailer');
    $mail->addAddress('rrhh@hatunsol.com.pe', 'RRHH');     // Add a recipient
//    $mail->addAddress('luiscarvajal2693@gmail.com', 'Joe User');     // Add a recipient

    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'], $_FILES['uploaded_file']['name']);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hatun';
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();
//    echo 'Message has been sent';

    header("Location: home.html");
    die();
} catch (Exception $e) {
//    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: home.html");
    die();
}

//header("Location: home.html");
//die();