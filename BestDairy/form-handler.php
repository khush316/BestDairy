<?php
$name = $_POST['name'];
$visitor_number = $_POST['number'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'up4905@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
			  "User Number: $visitor_number.\n".
			  "Subject: $subject.\n".
			  "User Message: $message.\n";

$to = 'pk9898075818@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");
?>