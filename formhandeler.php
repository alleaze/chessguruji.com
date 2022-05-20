<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'ankitsoni2006i@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Name: $name.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'rockozzz54@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);


header("location: contact.html");

?>