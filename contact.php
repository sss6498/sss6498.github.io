<?php

if($_POST["submit"]) {
    $recipient="sss6498@gmail.com";
    $subject="Submission from Website";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<h3>Thank you! Your message has been sent.</h3>";
}

?>