<?php
header('Refresh: 3; URL=/');
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$type = $_REQUEST['type'];
$body = $_REQUEST['body'];
$to = $_REQUEST['who'];
$subject1 = "Contact Us Form Submitted";
$from1 = $_REQUEST['email'];
$headers1 .= "From: $name <$from>";
$message1 = "Hello $to,
$name contacted you via the Contact Us form located at <http://teamblueridge.com/contact.php>
Name: $name
Email: $email
Type: $type
Message: $body";
mail($to, $subject1, $message1, $headers1);
$to2 = "$name <$email>";
$subject2 = "Team BlueRidge Contact Us Form Submission";
$headers2 .= "From: Team BlueRidge Webmaster <webmaster@teamblueridge.com>";
$message2 = "Hello, $name
Your 'Contact Us' form submission was successfully received. $to has received your message

Thank you,
Team BlueRidge Webmaster";
mail($to2, $subject2, $message2, $headers2);
header( 'Location: /' ) ;
?>
