<?php
$to = "engr.ahmadmustafeen@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: The Terminators";

if(mail($to,$subject,$txt,$headers)){
header("location:./index.php?success=1");
}
else{
header("location:./index.php?success=0");
}

?>