<?php
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['purpose']))
$purpose = $_POST['purpose'];
$content="First Name: $fname \n Last Name: $lname \n Email: $email \n Phone Number: $phone \n Message: $purpose";
$recipient = "info@shewfoundation.org";
$subject = "Membership/Volunteer Request to join";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
/* Redirect visitor to the thank you page */
header('Location: inquiry.html');
exit();
?>

