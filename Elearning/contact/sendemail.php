<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'banerjeeofficial21@gmail.com';
    $mail->Password = 'nfgodapdfvnqdtju';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('banerjeeofficial21@gmail.com');
    $mail->addAddress('banerjeeofficial21@gmail.com');//to receive messages

    $mail->isHTML(true);
    $mail->Subject = 'Message Received(Contact page)';
    $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
              <span>Thank you for contacting us!<br> Please refresh the page once!</span>
              </div>';
    echo $alert;
  }catch (Exception $e){
    $alert = '<div class="alert-error">
              <span>'.$e->getMessage().'</span>
              </div>';
    echo $alert;
  }
}


 ?>
