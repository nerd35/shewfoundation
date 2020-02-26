<?php
if(isset( $_POST['amount']))
$amount = $_POST['amount'];
if(isset( $_POST['direct']))
$direct = $_POST['direct'];
if(isset( $_POST['title']))
$title = $_POST['title'];
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['address']))
$address = $_POST['address'];
if(isset( $_POST['address1']))
$address1 = $_POST['address1'];
if(isset( $_POST['city']))
$city = $_POST['city'];
if(isset( $_POST['state']))
$state = $_POST['state'];

if(isset( $_POST['country']))
$country = $_POST['country'];
if(isset( $_POST['accept']))
$accept = $_POST['accept'];
$content="Desired Amount : $amount \n Help Directly: $direct \n Title: $title \n First Name: $fname \n Last Name: $lname \n Address 1: $address \n Address 2: $address1 \n City: $city \n State: $state \n Country: $country \n Accept Policy: $accept ";
$recipient = "donate@shewfoundation.org";
$subject = "Message from Donor";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
/* Redirect visitor to the thank you page */

header('Location: thankyoudonate.html');
exit();
?>

