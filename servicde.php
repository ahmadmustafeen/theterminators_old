<?php

require_once('./adminz/connection.php');
$service_Q  = mysqli_query($con,"SELECT * FROM `service` WHERE 1");
while($row = mysqli_fetch_assoc($service_Q)){
    $services_header = $row['services_header'];
    $services_text1 = $row['services_text1'];
    $services_text2 = $row['services_text2'];
    $services_text3 = $row['services_text3'];
    $services_text4 = $row['services_text4'];
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
        <div class="card-deck">

            <?php
for ($i=1;$i<4;$i++){
  $header = 'heading'.$i;
  $texter = 'text'.$i;
  $service_Q  = mysqli_query($con,"SELECT `$header`,`$texter` FROM `services` WHERE 1"); 
  while($row = mysqli_fetch_assoc($service_Q)){
      $heading = $row[$header];
      $text = $row[$texter];
  }
  if($heading == ''){
    ?>
            <div class="card" style="border:none;">

            </div>
            <?php
  }
  else{
    ?>
            <div class="card">

                <img class="card-img-top" src="./services/service<?php echo $i?>.png"  id="img<?php echo $i ?>" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $heading ?></h5>
                    <p class="card-text" style="height:100px;overflow-y:scroll"><?php echo $text ?></p>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
            </div>
            <?php

  }
  
}
?>

        </div>

        <br>

        <div class="card-deck">


            <?php
for ($i=4;$i<7;$i++){
  $header = 'heading'.$i;
  $texter = 'text'.$i;
  $service_Q  = mysqli_query($con,"SELECT `$header`,`$texter` FROM `services` WHERE 1"); 
  while($row = mysqli_fetch_assoc($service_Q)){
      $heading = $row[$header];
      $text = $row[$texter];
  if($heading == ''){
    ?>
            <div class="card" style="border:none;">

            </div>
            <?php
  }
  
  else{
    ?>
            <div class="card">
                <img class="card-img-top" src="./services/service<?php echo$i?>.png" alt="Card image cap" >
                <div class="card-body">
                    <h5 class="card-title"><?php echo $heading ?></h5>
                    <p class="card-text" style="height:100px;overflow-y:scroll"><?php echo $text ?></p>
                </div>
            </div>
            <?php

  }
}
}
  

?>

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