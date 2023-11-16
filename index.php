<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'maxmillinmuiruri@gmail.com';
$email_subject = 'New Form submission';

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"subject: $subject.\n".
"User Message: $message.\n";





?>


