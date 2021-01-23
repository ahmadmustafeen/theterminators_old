<?php 
include_once("./adminz/connection.php");
$contactQ  = mysqli_query($con,
"SELECT 
`aboutText1b`, 
`aboutText2b`, 
`aboutText3b`, 
`aboutText1c`, 
`aboutText2c`, 
`aboutText3c`, 
`aboutText1d`, 
`aboutText2d`, 
`aboutText3d`, 
`aboutText1e`,
`aboutText2e`, 
`aboutText3e`, 
`aboutHeading1`, 
`aboutHeading2`,
 `aboutHeading3`
 FROM `addaboutus` WHERE 1"); 





    while($row = mysqli_fetch_assoc($contactQ)){
        $aboutText1b= $row['aboutText1b'];
        $aboutText2b= $row['aboutText2b'];
        $aboutText3b= $row['aboutText3b'];
        $aboutText1c= $row['aboutText1c'];
        $aboutText2c= $row['aboutText2c'];
        $aboutText3c= $row['aboutText3c'];
        $aboutText1d= $row['aboutText1d'];
        $aboutText2d= $row['aboutText2d'];
        $aboutText3d= $row['aboutText3d'];
        $aboutText1e= $row['aboutText1e'];
        $aboutText2e= $row['aboutText2e'];
        $aboutText3e= $row['aboutText3e'];
        $aboutText1 = $aboutText1b.$aboutText1c.$aboutText1d.$aboutText1e ;
        $aboutText2 = $aboutText2b.$aboutText2c.$aboutText2d.$aboutText2e ;
        $aboutText3 = $aboutText3b.$aboutText3c.$aboutText3d.$aboutText3e ;
        $aboutHeading1 = $row['aboutHeading1'];
        $aboutHeading2 = $row['aboutHeading2'];
        $aboutHeading3 = $row['aboutHeading3'];
    }
$aboutQ  = mysqli_query($con,"SELECT
 `aboutHeader`,
 `aboutText`,
 `aboutText1`,
 `aboutText2`,
 `aboutText3`,
 `aboutText4`,
 `aboutmain`,
 `aboutmaindesc`
 FROM `about` WHERE 1"); 
while($row = mysqli_fetch_assoc($aboutQ)){
    $aboutHeader = $row['aboutHeader'];
    $aboutText1 = $row['aboutText1'];
    $aboutText2 = $row['aboutText2'];
    $aboutText3 = $row['aboutText3'];
    $aboutText4 = $row['aboutText4'];
    $aboutText = $aboutText1.$aboutText2.$aboutText3.$aboutText4;
    $aboutmain = $row['aboutmain'];
    $aboutmaindesc = $row['aboutmaindesc'];
}
$registration_info  = mysqli_query($con,"SELECT 
`heading`, 
`description`, 
`firstHeading`,
 `firstParagraph`, 
 `secondHeading`, 
 `secondParagraph`, 
 `thirdHeading`, 
 `thirdParagraph`, 
 `fourthHeading`, 
 `fourthParagraph`, 
 `fifthHeading`, 
 `fifthParagraph`,
  `sixthHeading`, 
  `sixthParagraph`
   FROM `priorities` WHERE 1"); 
while($row = mysqli_fetch_assoc($registration_info)){
    $heading = $row["heading"];
    $description = $row["description"];
    $firstHeading = $row["firstHeading"];
    $firstParagraph = $row["firstParagraph"];
    $secondHeading = $row["secondHeading"];
    $secondParagraph = $row["secondParagraph"];
    $thirdHeading = $row["thirdHeading"];
    $thirdParagraph = $row["thirdParagraph"];
    $fourthHeading = $row["fourthHeading"];
    $fourthParagraph = $row["fourthParagraph"];
    $fifthHeading = $row["fifthHeading"];
    $fifthParagraph = $row["fifthParagraph"];
    $sixthHeading = $row["sixthHeading"];
    $sixthParagraph = $row["sixthParagraph"];
}

?>

<!DOCTYPE html>
<html>

<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>The Terminators</title>
    <link rel="shortcut icon" type="image/x-icon" href="./siteDetails/logo.png">

    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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

include_once ('./header.php');
?>

    <div id="bgPic" class="text-center">
        <br><br><br><br>
        <h2>ABOUT US</h2>
        <br>
        <h6><a href="index.php">HOME</a> <span>/</span> ABOUT</h6>
        <br><br><br><br>
    </div>
    <br>
    <div class="aboutUs">
        <br><br><br>
        <div class="aboutUsDiv">
            <div class="aboutTop text-center">
                <h6>ABOUT US</h6>
                <h2><?php echo $aboutHeader ?></h2>
                <p><?php echo $aboutText?></p>
            </div>
            <div class="aboutMid">
                <div class="aboutMidLt">
                    <img src="img/about-1.jpg">
                </div>
                <div class="aboutMidRt">
                    <img src="img/about-2.jpeg">
                    <img src="img/about-3.jpeg">
                </div>
            </div>
            <!-- <div class="aboutBot text-left"><br>
                <h3><?php echo $aboutmain?></h3><br>
                <p><?php echo $aboutmaindesc?></p>
            </div> -->
        </div>
    </div>

    <br><br>

    <div class="aboutHome">
        <br><br><br><br>
        <h2><?php echo $heading?></h2>
        <p><?php echo $description ?></p><br>
        <div class="aboutLow">
            <div class="aboutDabba">
                <i class="fas fa-mobile-alt phone"></i>
                <p><span><?php echo $firstHeading?> </span><br><?php echo $firstParagraph?></p>
                <i class="fas fa-users"></i>
                <p><span><?php echo $secondHeading?> </span><br><?php echo $secondParagraph?></p>
                <i class="fas fa-cogs"></i>
                <p><span><?php echo $thirdHeading?> </span><br><?php echo $thirdParagraph?></p>
            </div>
            <div class="aboutDabba">
                <i class="fas fa-mobile-alt phone"></i>
                <p><span><?php echo $fourthHeading?> </span><br><?php echo $fourthParagraph?></p>
                <i class="fas fa-users"></i>
                <p><span><?php echo $fifthHeading?> </span><br><?php echo $fifthParagraph?></p>
                <i class="fas fa-cogs"></i>
                <p><span><?php echo $sixthHeading?> </span><br><?php echo $sixthParagraph?></p>
            </div>
        </div>
        <br><br><br><br>
    </div>

    <br>
    <div class="aboutQuality">
        <br><br>
        <div class="aqDiv">
            <div class="aqBox">
                <div class="aqBoxLt">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <div class="aqBoxRt">
                    <h4><?php echo $aboutHeading1 ?></h4>
                    <p><?php echo $aboutText1 ?></p>
<a href="">Read More...</a>
                </div>
            </div>
            <div class="aqBox">
                <div class="aqBoxLt">
                    <i class="fas fa-umbrella"></i>
                </div>
                <div class="aqBoxRt">
                <h4><?php echo $aboutHeading2 ?></h4>
                    <p><?php echo $aboutText2 ?></p>
<a href="">Read More...</a>
                </div>
            </div>
            <div class="aqBox">
                <div class="aqBoxLt">
                    <i class="fas fa-users"></i>
                </div>
                <div class="aqBoxRt">
                <h4><?php echo $aboutHeading3 ?></h4>
                    <p><?php echo $aboutText3 ?></p>
<a href="">Read More...</a>
                </div>
            </div>
        </div>
        <br><br>
    </div>


	<?php
include_once('./footer.php');
?>


    <?php


include_once('./loader.php');
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

    <script type="text/javascript">


    </script>
</body>

</html>