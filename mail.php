<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];


$content="From: $name";
$recipient = "jrw0594@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Heroku Doesn't allow for emails to be sent via php :(");
echo "Email sent!";
?>