<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$product=$_POST['subject'];
$message=$_POST['message'];


$email_from= 'info@OolaJewellers.org';

$email_subject= 'New Form Submission';

$email_body= 'User Name: $name.\n'.
            'User Email: $visitor_email.\n'.
            
            'Product: $product.\n'.
            'User Message: $message.\n';
$to= 'puriarundhati@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>
