<?php


if(isset($_POST['submit']))
    $name = $_POST['name'];
    $subject = $_POST['mail'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message']

    $mailTo = "djruiz@iu.edu";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an email from ". $name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

?>