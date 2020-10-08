<?php
if (!empty($_POST)) {
    extract($_POST);
    //Test de la fonction mail();

// *** A configurer par vos soins

$to = "contact@sonef.net"; // Mettez l'email de réception
$from = $email; // Adresse email du destinataire de l'envoi, celui rattaché à votre domaine LWS.

// Ne pas modifier les lignes ci-dessous

$JOUR = date("Y-m-d");  // Jour de l'envoi de l'email
$HEURE = date("H:i"); // Heure d'envoi de l'email

$Subject = "$object - $JOUR $HEURE";
$mail_Data = "";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";

$mail_Data .= "
\n";
$mail_Data .= $message;
$headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: $from  \n";

   // Message de Priorité haute
   // -------------------------
   $headers .= "X-Priority: 1  \n";
   $headers .= "X-MSMail-Priority: High \n";

   $CR_Mail = TRUE;

   $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);
 
   if ($CR_Mail === FALSE) {  //echo " ### CR_Mail=$CR_Mail - Erreur envoi mail \n";
    //header("Location:index.php?action=notification");
    $_SESSION['mail'] = 0;
   } else {
    $_SESSION['mail'] = 1;
    //echo " *** CR_Mail=$CR_Mail - Mail envoyé \n";
    //header("Location:index.php?action=home");
  }               
}
  
?>