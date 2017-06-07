<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = 'From: ' . $name;
$to = 'spencermiller90@yahoo.com';
$subject = 'Business Inquiry';

$body = "From: $name\n Email: $email\n Message:\n $message";
mail ($to, $subject, $body, $from);
echo "Your message has been sent!";

?>