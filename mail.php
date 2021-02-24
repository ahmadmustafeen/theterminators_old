<?php
if(isset($_POST['name'])){
header("location:./index.php?success=0");
}
$name = $_POST['name'];
$message = $_POST['message'];
$number ="Not Given";
$subject ="";
if(isset($_POST['number'])){
$number = $_POST['number'];
}
if(isset($_POST['subject'])){
$subject = $_POST['subject'];
}
$email = $_POST['email'];
$to = "admin@theterminators.biz.pk";
$subject = "$name have sent a message,Client Said: $subject";
$txt = "$message and Senders email is $email,number is $number";
$headers = "From: The Terminators Website";

if(mail($to,$subject,$txt,$headers)){
header("location:./index.php?success=1");
}
else{
header("location:./index.php?success=0");
}
?>