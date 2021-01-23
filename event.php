<?php 

include_once('./adminz/connection.php');
$event_info  = mysqli_query($con,"SELECT `event_id`, `event_name` FROM `events` WHERE 1"); 
?>

<!DOCTYPE html>
<html>

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

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"
            aria-hidden="true"></i></button>


    <?php

include_once('./header.php');
?>
    <?php


// include_once('./loader.php');
?>


    <div id="bgPic" class="text-center">
        <br><br><br><br>
        <h2>OUR EVENTS</h2>
        <br>
        <h6><a href="index.php">HOME</a> <span>/</span> EVENTS</h6>
        <br><br><br><br>
    </div>

    <br>

    <br>

    <?php
$i=0;$j=0;
while($row = mysqli_fetch_assoc($event_info)){
    $event_id = $row["event_id"];$i++;$j++;
    $event_name = $row["event_name"];
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
    <img src="./Event/event<?php echo $event_id ?>.png" id='img<?php echo $event_id; ?>' atr="<?php echo $event_name; ?>" onClick="onPRess(this.id)">
    <?php }
        if($i===3){
            ?>
    </div>
    <div class="eventPicsRt">
        <?php }
        
    if($i===3||$i===4){?>
        <!-- </div> -->
        <img src="./Event/event<?php echo $event_id ?>.png" id='img<?php echo $event_id; ?>' atr="<?php echo $event_name; ?>"   onClick="onPRess(this.id)">
        <!-- <img src="img/gallary/img3.jpg" id="img3">
        <img src="img/gallary/img3.jpg" id="img3"> -->
        <?php
    }if($i===4){
        ?>
    </div>
    </div>
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
    ?>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    </div>
    <script>
//    var img1 = document.getElementById("img1");
// var img2 = document.getElementById("img2");
// var img3 = document.getElementById("img3");
// var img4 = document.getElementById("img4");
// var img5 = document.getElementById("img5");
// var img6 = document.getElementById("img6");
// var img7 = document.getElementById("img7");
// var img8 = document.getElementById("img8");
// var img9 = document.getElementById("img9");
// var img10 = document.getElementById("img10");
// var img11 = document.getElementById("img11");
// var img12 = document.getElementById("img12");
// var img13 = document.getElementById("img13");
// var img14 = document.getElementById("img14");
// var img15 = document.getElementById("img15");
// var img16 = document.getElementById("img16");
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img1.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img2.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img3.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img4.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img5.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img6.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img7.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img8.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img9.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img10.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img11.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img12.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img13.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img14.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img15.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// img16.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }
// // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  console.log("press");
  document.getElementById("myModal").style.display = "none";
}

    </script>
    <!-- <div class="eventDiv">
        <div class="eventPics">
            <div class="eventPicsLt">
                <img src="img/gallary/img1.jpg" id="img1">
                <img src="img/gallary/img2.jpg" id="img2">
            </div><br><br>
            <div class="eventPicsRt">
                <img src="img/gallary/img3.jpg" id="img3">
                <img src="img/gallary/img4.jpg" id="img4">
            </div>
        </div>
        <br><br>
        
    </div> -->
    <br><br>

    <?php
include_once('./footer.php');
?>


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
    <!-- <script src="js/gallaryModal.js"></script> -->
    <!-- <script src="js/eventModal.js"></script> -->

    <script type="text/javascript">


    </script>
</body>

</html>
<style type="text/css">


</style>