<?php
if(!isset($_POST['submit']))
{
    echo "error; You need to submit the contact form.";
}

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//validate
if(empty($name)||empty($subject)||empty($message))
{
    echo "Entire form is mandatory.";
    exit;
}

$email_from = 'maxemileffort@gmail.com';
$email_subject = "topic: $subject";
$email_body = "You have a new message from $email. \n Here is the message: \n$message";
$to = 'maxemileffort@gmail.com';
$headers  "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);

header('Location: https://maxemileffort.github.io/portfolio-2#email')

?>