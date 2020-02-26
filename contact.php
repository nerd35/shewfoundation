<?php
if(isset( $_POST['yname']))
$yname = $_POST['yname'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
$content="First Name: $fname \n Name: $name \n Email: $email \n Phone Number: $phone \n Message: $message";
$recipient = "info@shewfoundation.org";
$subject = "Equiry from visitor";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
/* Redirect visitor to the thank you page */

header('Location: inquiry.html');
exit();
?>

