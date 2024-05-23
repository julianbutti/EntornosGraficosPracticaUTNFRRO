<?php
session_start();



/**
 Envio de Email 
 ***/

mail($to, $subject, $cuerpo);
// https://www.php.net/manual/es/function.mail.php
mail($to, $subject, $cuerpo, $arregloHeaders);


//Se recomienda utilizar https://github.com/PHPMailer/PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    var_dump($e);
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


// https://formspree.io/
/*
<form action="https://formspree.io/f/s234adfsadfas32423423" method="post">
  <label for="email">Your Email</label>
  <input name="Email" id="email" type="email">
  <button type="submit">Submit</button>
</form>
*/


/** 
    Sesiones
**/

//Superglobal $_SESSION -> ARREGLO
session_start();

$_SESSION["visitas"]++;
$_SESSION["clima"] = "El clima está nublado...";

if($_POST['usuario'] == "admin" AND $_POST['clave'] == "pedropedro"){

    $_SESSION["usario_valido"] = true;
    $_SESSION["email"] = "admin@dominio.com";
    $_SESSION["usuario"] = $_POST['usuario'];

    $_SESSION["accesos"][date('Y-m-d')]++;

}else{
    $_SESSION["usario_valido"] = false;

    $_SESSION['MENSAJE'] = "Usuario o clave incorrecto";
    //$_SESSION = []; //Blanqueo todas las posiciones del array
}


?>