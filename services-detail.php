<?php
require_once('./adminz/connection.php');

$service=1;
if(isset($_GET['service'])){
    $service = $_GET['service'];
}



$gallery_info  = mysqli_query($con,"SELECT `image_id` FROM `services_details` WHERE service_id='$service'"); 
$services_header="Service heading";
$services_text1="Some Paragraph about the service";
$services_text2="";
$services_text3="";
$services_text4="";
$service_Q  = mysqli_query($con,"SELECT * FROM `services_text` WHERE service_id='$service'");
while($row = mysqli_fetch_assoc($service_Q)){
    $services_header = $row['service_heading'];
    $services_text1 = $row['service_paragraph1'];
    $services_text2 = $row['service_paragraph2'];
    $services_text3 = $row['service_paragraph3'];
    $services_text4 = $row['service_paragraph4'];
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>The Terminators</title>
    <link rel="shortcut icon" type="image/x-icon" href="./siteDetails/logo.png">

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

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"
            aria-hidden="true"></i></button>

    <?php

include_once('./header.php');
?>
    <?php


include_once('./loader.php');
?>


    <div id="bgPic" class="text-center">
        <br><br><br><br>
        <h2>OUR SERVICES</h2>
        <br>
        <h6><a href="index.php">HOME</a> <span>/</span> SERVICES</h6>
        <br><br><br><br>
    </div>
    <br>

    <div class="service services">
        <br><br>
        <div class="serHead text-center">
            <h6>OUR SERVICES</h6>
            <h2><?php echo $services_header ?></h2>
            <p><?php echo $services_text1,$services_text2,$services_text3,$services_text4 ?></p>
        </div><br>
       
    <?php
$i=0;$j=0;
while($row = mysqli_fetch_assoc($gallery_info)){
    $gallery_id = $row["image_id"];$i++;$j++;
    if($i==1){?>
    <div class="eventDiv">
        <div class="eventPics">

            <div class="eventPicsLt">
                <?php }
            
    if($i==5){?>
    <br>
    <br>
        <!-- </div> -->
    </div>
    <?php $i=0;
    }

    if($i===1||$i===2){?>
    <img src="./services/servicerefurb<?php echo $gallery_id ?>.png" id='img<?php echo $gallery_id; ?>'  onClick="onPRess(this.id)">
    <?php }
        if($i===3){
            ?>
    </div>
    <div class="eventPicsRt">
        <?php }
        
    if($i===3||$i===4){?>
        <!-- </div> -->
        <img src="./Gallery/gallery<?php echo $gallery_id ?>.png" id='img<?php echo $gallery_id; ?>'  onClick="onPRess(this.id)">
 <!-- <img src="img/gallary/img3.jpg" id="img3">
        <img src="img/gallary/img3.jpg" id="img3"> -->
        <?php
    }if($i===4){
        $i=0;
        ?>
    </div>
    </div><br>
    <br>
    <?php
    }





}
if($i==1){?>
    </div>
    </div>
    <div class="eventPicsRt">
        <!-- <img src="img/gallary/img3.jpg" id="img3">
        <img src="img/gallary/img3.jpg" id="img3"> -->
    </div>
    </div>
    <?php
}
if($i==2){?>

    </div>
    </div>
    </div>
    <div class="eventPicsRt">
    </div>
    </div>
    </div>
    <?php
}
if($i==3){
    ?>
    </div>
    </div>
    </div>
    <?php
}
if($j===0){
    ?>
    <h2 style="text-align:center">No Images are uploaded yet</h2>
    <?php
}
    ?>
    
    <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;padding-top:50px;padding-bottom:50px">
<a href="./services.php"><button style="margin:auto">Back To Services </button></a>
</div>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    </div>

        <br><br><br>
    </div>

    <?php
include_once('./footer.php');
?>

    <!-- <div class="construct-site-preloader" id="preloader">
         <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
         </div>
</div>
 -->


   
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="js/quote.js"></script>
    <script src="js/button.js"></script>
    <script src="js/preload.js"></script>
    <script src="js/valid.js"></script>
    <!-- <script src="js/eventModal.js"></script> -->

    <script type="text/javascript">


    </script>
</body>

</html>
<style>
.card-text::-webkit-scrollbar {
    display: none;
  }
  
  /* Hide scrollbar for IE, Edge and Firefox */
  .card-text {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
  }
</style>