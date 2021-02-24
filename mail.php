<?php
if(isset($_POST['name'])){
header("location:./index.php?success=0");
}
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$to = "admin@theterminators.biz.pk";
$subject = "$name have sent a message";
$txt = "$message and Senders email is $email";
$headers = "From: The Terminators Website";

if(mail($to,$subject,$txt,$headers)){
header("location:./index.php?success=1");
}
else{
header("location:./index.php?success=0");
}
?>