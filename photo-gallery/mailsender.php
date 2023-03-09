<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "about.php";

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'vendor/autoload.php';

function myMail()
{
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    $email = $_POST["email"];
    $text = trim($_POST['text']);
    $text = nl2br($text);
    $subject = $_POST["subject"];

    try {
//Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output - SMTP::DEBUG_SERVER
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                             //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                     //Enable SMTP authentication
        $mail->Username = 'photogallery.halikova@gmail.com';                     //SMTP username
        $mail->Password = 'dnerrxdumpzjiuhd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
        $mail->setFrom('photogallery.halikova@gmail.com');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

//Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $text . '<br>' . "Můj email je:" . '<br>' .  $email;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo '<script type="text/javascript">
       window.onload = function () { alert("Zpráva byla úspěšně odeslána!"); 
           window.location.href = "http://localhost:8000/photo-gallery/about.php";} </script>';

    } catch (Exception $e) {;
        echo "Email se nemohl odeslat. Chyba: {$mail->ErrorInfo}";

    }
    //return file_put_contents("mail.html", $recipient . "<br><br>" . $text);
}

myMail();