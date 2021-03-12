<?php
    if(!isset($_POST['submit']))
    {
        echo "error: You need to submit the contact form.";
    }

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //validate
    if(empty($email)||empty($subject)||empty($message))
    {
        echo "Entire form is mandatory.";
        exit;
    }

    $to = 'maxemileffort@gmail.com';
    $email_subject = "topic: $subject";
    $email_body = "You have a new message from $email. \n Here is the message: \n$message";
    $headers  "From: $to \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header('Location: https://maxemileffort.github.io/portfolio-2#email')

?>