<?php 

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
//require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';

$theme = $_POST['theme'];
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'wlegoofkool@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '@576varic'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('wlegoofkool@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('wlegoofkool@gmail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$theme .'<br>'.$email.'<br>'.$name.'<br>'.$message;
$mail->AltBody = '';

$mail->send();
   header('location: feedback.php'); 
} catch (Exception $e) {
    echo 'Error';
}
?>