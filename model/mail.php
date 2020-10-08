<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_SESSION['client_reservation'])) {//Send Mail to Client
  
  $data = Manager::getData("client", "id_client", $_SESSION['client_reservation'])['data'];
  
  $client = $data['id_client'];
  $email = $data['email'];
  $nom = $data['nom'];
  $object = "Reservation de billet";
  ob_start();
  include('mail_message.php');

  $messages = ob_get_clean();
  // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail34.lwspanel.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'contact@sonef.net';                     // SMTP username
    $mail->Password   = '$onef@M@ail2@';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = '465';                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //$mail->SMTPDebug   = 1;
    
    //Recipients
    $mail->setFrom('contact@sonef.net', 'Sonef');
    $mail->addAddress($email, $nom);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('contact@sonef.net', 'Sonef');//Adresse de réponse
    //ob_start();
     // include('mail_message.php');
    //$messages = ob_get_clean();
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $object;
    $mail->Body    = $messages;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //$mail->send();
    
    if($mail->send()){
      $i =0;
      if ($i==0) {
        $_SESSION['client'] = $client;
        echo "<script>window.location.assign('index.php?action=reservationc')</script>";
      }
    }

} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}