<?php 

include_once('./adminz/connection.php');
$event_info  = mysqli_query($con,"SELECT `event_id`, `event_name` FROM `events` WHERE 1"); 
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>The Terminators</title>
    <link rel="shortcut icon" type="image/x-icon" href="./siteDetails/logo.png">

    <script>
    const onPRess = (id) =>{
      document.getElementById(id).src
      document.getElementById("myModal").style.display = "block";
      document.getElementById("img01").src = document.getElementById(id).src;
    }
    </script>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/modal.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Libre+Baskerville&family=Merriweather:wght@300&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/2167d4cf58.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php

include_once('./header.php');
?>

    <div id="bgPic" class="text-center">
        <br><br><br><br>
        <h2>OUR CLIENTS</h2>
        <br>
        <h6><a href="index.php">HOME</a> <span>/</span> CLIENTS</h6>
        <br><br><br><br>
    </div>
    <div class="container-client">

<?php
$mini_counter=0;
while($row = mysqli_fetch_assoc($event_info)){


 $event_id = $row["event_id"];
    $event_name = $row["event_name"];
if($mini_counter===0){
?>
<div class="container-client-row">

            <div class="container-client-row-inner">
                <img src="./Event/event<?php echo$event_id?>.png" alt="" srcset="">
<?php
}
if($mini_counter===1){
?>
                <img src="./Event/event<?php echo$event_id?>.png" alt="" srcset="">
</div>


<?php
}if($mini_counter===2){
?>

            <div class="container-client-row-inner">
                <img src="./Event/event<?php echo$event_id?>.png" alt="" srcset="">
<?php
}
if($mini_counter===3){
?>
                <img src="./Event/event<?php echo$event_id?>.png" alt="" srcset="">
</div>

<?php
}
if($mini_counter===4){
?>

            <div class="container-client-row-inner">
                <img src="./Event/event<?php echo$event_id?>.png" alt="" srcset="">
<?php
}

if($mini_counter===5){
?>
                <img src="./Event/event<?php echo$event_id?>.png" alt="" srcset="">
</div>
</div>


<?php
$mini_counter=0;
}else{

$mini_counter++;
}
}
if($mini_counter===1){
// echo $mini_counter;
?>
   <img src="./Event/event10.png" alt="" style="visibility:hidden">
            </div>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" srcset="" style="visibility:hidden">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
        </div>
<?php
}
else if($mini_counter===2){
// echo $mini_counter;
?>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" srcset="" style="visibility:hidden">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
        </div>
<?php
}
else if($mini_counter===3){
// echo $mini_counter;
?>
           
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
        </div>
<?php
}
else if($mini_counter===4){
// echo $mini_counter;
?>
           
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
        </div>
<?php
}
else if($mini_counter===5){
// echo $mini_counter;
?>
                <img src="./Event/event10.png" alt="" style="visibility:hidden">

            </div>
        </div>
<?php
}
?>
<!-- </div>
        <div class="container-client-row">
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" srcset="">
                <img src="./Event/event10.png" alt="" srcset="">
            </div>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" srcset="">
                <img src="./Event/event10.png" alt="" srcset="">

            </div>
            <div class="container-client-row-inner">
                <img src="./Event/event10.png" alt="" srcset="">
                <img src="./Event/event10.png" alt="" srcset="">

            </div>
        </div>
    </div> -->
   <?php
include_once('./footer.php');
?>

</body>

</html>
<style>
    .container-client {
padding-top:50px;
padding-bottom:50px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .container-client-row {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .container-client-row-inner {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .container-client-row-inner img {
        width: 250px;
height:250px;
margin:5px

    }

    @media all and (min-width: 1024px) and (max-width: 1280px) {

        .container-client-row-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

    }

    @media all and (min-width: 768px) and (max-width: 1024px) {
        .container-client-row-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container-client-row-inner img {
            width: 200px;
height:200px;

        }
    }

    @media all and (min-width: 480px) and (max-width: 768px) {

        .container-client-row-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container-client-row-inner img {
            width: 160px;  height: 160px;

        }
    }

    @media all and (max-width: 480px) {
        .container-client-row {
            flex-direction: column;
        }

        .container-client-row-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .container-client-row-inner img {
            width: 120px;
 height: 120px;
        }
    }
</style>