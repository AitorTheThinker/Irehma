<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset( $_POST ['name']))
    $name = $_POST ['name'];
if(isset( $_POST ['email']))
    $email = $_POST ['email'];
if(isset( $_POST ['message']))
    $message = $_POST ['message'];
if(isset( $_POST ['subject']))
    $subject = $_POST ['subject'];

    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "info@irema.es";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");

try {
    //Server settings
    $mail->SMTPDebug = 0; //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host= 'mail.irehma.es';                     //Set the SMTP server to send through                                  //Enable SMTP authentication
    $mail->Username = 'info@irehma.es';                     //SMTP username
    $mail->Password = 'A_mendoza699';                               //SMTP password
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    ); //Enable implicit TLS encryption
    $mail->Port = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name );
    $mail->addAddress('info@irehma.es', 'Aitor');     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
   

    $mail->send();
    echo 'El mensaje se envió correctamente';
    
$location='http://www.irehma.es';
$redirect=true;

if($redirect && !empty($location)){
    header('Location:'. $location);
    exit;
}

} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje {$mail->ErrorInfo}";
}
  if (isset($_POST['name']))
    $name = $_POST['name'];
  if (isset($_POST['email']))
    $email = $_POST['email'];
  if (isset($_POST['message']))
    $message = $_POST['message'];
  if (isset($_POST['subject']))
    $subject = $_POST['subject'];
  if ($name === '') {
    echo "El nombre no puede estar vacío";
    die();
  }
  if ($email === '') {
    echo "El email  no puede estar vacío";
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Formato de email inválido ";
      die();
    }
  }
  if ($subject === '') {
    echo "El asunto no puede estar vacío";
    die();
  }
  if ($message === '') {
    echo "El mensaje no puede estar vacío.";
    die();
  }

?>

