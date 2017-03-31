<?php
$to      = 'dreambig@patenteur.com.au';
$subject = 'Messege from contacy form';
$message = 'Message: '.$_POST['message'].
    "\r\n".' Name: '.$_POST['name'].
    "\r\n".' Phone: '.$_POST['phone'].
    "\r\n".' Mail: '.$_POST['email'];
$email= $_POST['email'];
$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header('Location: '."contact.php");
?>
