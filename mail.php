<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$Massage = $_POST['Massage'];





$content="From: $name \n ";
$recipient = "peter.fathalla@gmail.com";
$mailheader = " $email \r\n 
name:    $name \r\n
phone:   $phone \r\n
Email:   $mail \r\n
Message: $Massage";
mail($recipient,  $content, $mailheader) or die("Error!");
exit();
?>