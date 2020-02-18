<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        error_reporting(E_ERROR);
        $sesion = session_id();
        
        $nombre = $_POST['name'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $codpostal = $_POST['codpostal'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];
        
        include('./paginaPuente.php');
        $mysqli = conectaBBDD();
        
         $consulta = $mysqli -> query("INSERT INTO `usuarios`(`usuario`, `correo`, `direccion`, `cod_postal`, `telefono`, `contraseña`) VALUES ('".$nombre."', '".$correo."', '".$direccion."', '".$codpostal."', '".$telefono."', '".$password."');");
        
        if (mysqli_connect_errno()){
            echo "Imposible conectarse a la base de datos: " .
            mysqli_connect_error();
        } else {
            header("Location: login.php");
        } 
        
        ?>
        
        <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';                        // Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'julidam2ano@gmail.com';                     // SMTP username
    $mail->Password = 'Tiburon13';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('julidam2ano@gmail.com', 'julian');
    $mail->addAddress('' . $correo . '', '' . $nombre . '');     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Tu suscripcion a Rolex';
    $mail->Body = 'Gracias por suscribirte a nuestro programa de fidelización, <br> Solo por hacerlo acabas de recibir un correo con <b>informacion adicional </b> '
            . 'http://localhost/EntregaFinal/inicio.php?sesion='. $sesion . '<br> ';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
        
    </body>
</html>


