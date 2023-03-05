<?php
if(isset($_POST['message'])){
header("location:./index.php?success=0");
}
$name = $_POST['name'];
echo $name."asdasdas";
$message = $_POST['message'];
$number ="Not Given";echo $number;
$subject ="";
if(isset($_POST['number'])){
$number = $_POST['number'];
}
if(isset($_POST['subject'])){
$subject = $_POST['subject'];
}
$email = $_POST['email'];
$to = "admin@theterminators.biz.pk";
$subject = $name." have sent a message,Client Said: ".$subject;
$txt = $_POST['message']." CLIENT EMAIL: ".$_POST['email'];
$headers = "From: The Terminators Website";

if(mail($to,$subject,$txt,$headers)){
header("location:./index.php?success=1");
}
else{
header("location:./index.php?success=0");
}
?>