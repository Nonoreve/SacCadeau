<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
ini_set('memory_limit', '128M');


/* Include the Composer generated autoload.php file. */
require '/home/william/Installations/PHPMailer/vendor/autoload.php';
/* If you installed PHPMailer without Composer do this instead: */
/*
require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMailer\src\PHPMailer.php';
require 'C:\PHPMailer\src\SMTP.php';
*/

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

$account="SacKado@outlook.com";
$password="2W8Ds2ju";
$to=$_POST['mail'];
$from="SacKado@outlook.com";
$from_name="Vishal G.V";
$msg="<strong>Rejoignez vos meilleurs amis sur Sackado</strong> <br> <a href=#>Lien Fictif</a>"; // HTML message
$subject="Ceci n'est pas un spam";

/* Open the try/catch block. */
try {
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.live.com";
    $mail->SMTPAuth= true;
    $mail->Port = 587;
    $mail->Username= $account;
    $mail->Password= $password;
    $mail->SMTPSecure = 'tls';
    $mail->From = $from;
    $mail->FromName= $from_name;
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->addAddress($to);
    if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
       }else{
        echo "E-Mail has been sent";
        header('Location: ../vues/pageGroupes.php');
       }
       $mail->SMTPDebug = 4;
   
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}

?>

