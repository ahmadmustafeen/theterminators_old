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
$contact_Q  = mysqli_query($con,"SELECT * FROM `contact` WHERE 1");
while($row = mysqli_fetch_assoc($contact_Q)){
    $contact_header = $row['contact_header'];
    $contact_text1 = $row['contact_text1'];
    $contact_text2 = $row['contact_text2'];
    $contact_text3 = $row['contact_text3'];
    $contact_text4 = $row['contact_text4'];
}
$getting_text_Q  = mysqli_query($con,"SELECT * FROM `getting_started` WHERE 1");
while($row = mysqli_fetch_assoc($getting_text_Q)){
    $getting_s_t = $row['getting_s_t'];
}


$sliderQ  = mysqli_query($con,"SELECT * FROM `slider` WHERE 1");
while($row = mysqli_fetch_assoc($sliderQ)){
    $slider1_heading = $row['slider1_heading'];
    $slider2_heading = $row['slider2_heading'];
    $slider3_heading = $row['slider3_heading'];
    $slider4_heading = $row['slider4_heading'];
    $slider1_text = $row['slider1_text'];
    $slider2_text = $row['slider2_text'];
    $slider3_text = $row['slider3_text'];
    $slider4_text = $row['slider4_text'];
 
}
$registration_info  = mysqli_query($con,"SELECT 
`heading`, 
`description`, 

`priorities_description1`, 
`priorities_description2`, 
`priorities_description3`, 
`priorities_description4`, 
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
    $priorities_heading = $row["heading"];
    $priorities_description1 = $row["priorities_description1"];
    $priorities_description2 = $row["priorities_description2"];
    $priorities_description3 = $row["priorities_description3"];
    $priorities_description4 = $row["priorities_description4"];
    // $description = $row["description"];
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
$description = $priorities_description1.$priorities_description2.$priorities_description3.$priorities_description4;

?>



<!DOCTYPE html>
<html>

<head>
    <title>The Terminators</title>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  -->


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

include_once('./header.php');
?>
<?php


// include_once('./loader.php');
?>


    <div id="gallery">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                    <img src="./slider/portfolio1.png" class="d-block w-100  slider_img" alt="...">
                    <div class="picSlide">
                        <h2 class="animate__animated animate__fadeInDown animate__slow animate__delay-0.5s"><?php echo $slider1_heading?></h2>
                        <p class="animate__animated animate__fadeIn animate__slower animate__delay-1s">
                            <?php echo $slider1_text ?>
                        </p>
                        <a href="contact.php"
                            class="construct-btn animate__animated animate__fadeInUp animate__slow animate__delay-0.5s">start
                            a project</a>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="./slider/portfolio2.png" class="d-block w-100 slider_img" alt="...">
                    <div class="picSlide">
                        <h2 class="animate__animated animate__fadeInDown animate__slow animate__delay-0.5s"><?php echo $slider2_heading ?></h2>
                        <p class="animate__animated animate__fadeIn animate__slower animate__delay-1s"><?php echo $slider2_text?> </p>
                        <a href="contact.php"
                            class="construct-btn animate__animated animate__fadeInUp animate__slow animate__delay-0.5s">start
                            a project</a>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="./slider/portfolio3.png"  class="d-block w-100 slider_img" alt="...">
                    <div class="picSlide">
                        <h2 class="animate__animated animate__fadeInDown animate__slow animate__delay-0.5s">
                            <?php echo $slider3_heading ?>
                        </h2>
                        <p class="animate__animated animate__fadeIn animate__slower animate__delay-1s"><?php echo $slider3_text ?> </p>
                        <a href="contact.php"
                            class="construct-btn animate__animated animate__fadeInUp animate__slow animate__delay-0.5s">start
                            a project</a>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="./slider/portfolio4.png" class="d-block w-100 slider_img" alt="...">
                    <div class="picSlide">
                        <h2 class="animate__animated animate__fadeInDown animate__slow animate__delay-0.5s"><?php echo $slider4_heading ?></h2>
                        <p class="animate__animated animate__fadeIn animate__slower animate__delay-1s"><?php echo $slider4_text ?> </p>
                        <a href="contact.php"
                            class="construct-btn animate__animated animate__fadeInUp animate__slow animate__delay-0.5s">start
                            a project</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="service">
        <br><br>
        <div class="serHead text-center">
            <h6>Nature of Business</h6>
            <h2><?php echo $services_header ?></h2>
            <p><?php echo $services_text1,$services_text2,$services_text3,$services_text4 ?></p>
        </div><br>
        <div class="card-deck">
      
        <?php
      
for ($i=1;$i<4;$i++){
  $header = 'nob_heading'.$i;
  $textera = 'nob_paragraph'.$i.'a';
  $texterb = 'nob_paragraph'.$i.'b';
  $texterc = 'nob_paragraph'.$i.'c';
  $texterd = 'nob_paragraph'.$i.'d';
  $nature_of_business_Q  = mysqli_query($con,"SELECT `$header`,`$textera`,`$texterb`,`$texterc`,`$texterd` FROM `nature_of_business` WHERE 1"); 
  while($row = mysqli_fetch_assoc($nature_of_business_Q)){
      $heading = $row[$header];
      $textera = $row[$textera];
      $texterb = $row[$texterb];
      $texterc = $row[$texterc];
      $texterd = $row[$texterd];
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
                <img class="card-img-top" src="./NatureOfBusiness/nob<?php echo $i?>.png" alt="Card image cap">
                <div class="card-body" >
                    <h5 class="card-title"><?php echo $heading ?></h5>
                    <p class="card-text" style="height:100px;overflow-y:scroll"><?php echo $textera.$texterb.$texterc.$texterd ?></p>
                </div>
            </div>
            <?php

  }
  
}
?>  </div>
        <br><br><br>
    </div>

    <div class="aboutHome">
        <br><br><br><br>
        <h2><?php echo $priorities_heading?></h2>
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

    <div class="parallex">
        <div class="clipPath">
            <p><i class="fas fa-home"></i> &nbsp; <?php echo $getting_s_t ?></p>
        </div><br>
        <div class="parallexBut">
            <a href="contact.php" class="construct-btn">start a project</a>
        </div><br>
    </div>



<!-- SLIDER -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<!-- <div class="brands">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="./Gallery/gallery1.png" alt=""></div>
                        </div>
                    </div> 
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<script>
$(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:1000,
nav:false,
dots:false,
autoWidth:true,
items:4,
margin:42
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});</script>
<style>

.brands {
    width: 100%;
    padding-top: 90px;
    padding-bottom: 90px;

}

.brands_slider_container {
    height: 130px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    padding-left: 97px;
    padding-right: 97px;
    /* background: #fff */
}

.brands_slider {
    height: 100%;
    margin-top: 50px
}

.brands_item {
    height: 200px
}

.brands_item img {
    max-width: 100%
}

.brands_nav {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 5px;
    cursor: pointer
}

.brands_nav i {
    color: #e5e5e5;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.brands_nav:hover i {
    color: #676767
}

.brands_prev {
    left: 40px
}

.brands_next {
    right: 40px
}
</style>





<!-- END SLIDER -->



    <div class="contactHome clearfix">
        <div class="contactHomeLt">
            <br><br><br><br>
            <h6>CONTACT US SOON</h6>
            <h2><?php echo $contact_header ?></h2>
            <p><?php echo $contact_text1,$contact_text2,$contact_text3,$contact_text4 ?></p>
            <br><br>
            <p class="float-right">
                <i class="fas fa-star"></i><span class="starIcon"><i class="fas fa-star"></i></span><i
                    class="fas fa-star"></i>
            </p>
            <br><br><br><br>
        </div>
        <div class="contactHomeRt">
            <br>
            <form onsubmit="return validate()" action="MAILTO:zeerak71@yahoo.com" method="POST" enctype="text/plain">
                <table><br>
                    <tr>
                        <td class="label">Your Name</td>
                        <td class="label">Email Address</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="Name" class="form-control" id="name"></td>
                        <td><input type="email" name="Email" class="form-control" id="mail"></td>
                    </tr>
                </table><br>
                <label>How Can We Help You</label><br>
                <textarea rows="3" id="message" name="Message"></textarea><br><br>
                <button type="submit" class="construct-btn">Request Quote</button><br><br>
            </form>
            <br>
        </div>
    </div><br><br>


   
<?php
include_once('./footer.php');
?>



  
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