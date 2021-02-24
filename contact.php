<?php
$contact_header = "";
$contact_text1 = "";
$contact_text2 = "";
$contact_text3 ="";
$contact_text4 = "";

require_once('./adminz/connection.php');
$contact_Q  = mysqli_query($con,"SELECT * FROM `contact` WHERE 1");
while($row = mysqli_fetch_assoc($contact_Q)){
    $contact_header = $row['contact_header'];
    $contact_text1 = $row['contact_text1'];
    $contact_text2 = $row['contact_text2'];
    $contact_text3 = $row['contact_text3'];
    $contact_text4 = $row['contact_text4'];
}
$contact_info  = mysqli_query($con,"SELECT `primaryContactNumber`, `secondaryContactNumber`, `primaryEmailAddress`, `addressLine1`, `addressLine2` FROM `contactdetails` WHERE 1");
while($row = mysqli_fetch_assoc($contact_info)){
    $primaryContactNumber = $row['primaryContactNumber'];
    $secondaryContactNumber = $row['secondaryContactNumber'];
    $primaryEmailAddress = $row['primaryEmailAddress'];
    $addressLine1 = $row['addressLine1'];
    $addressLine2 = $row['addressLine2'];
}


?>


<!DOCTYPE html>
<html>

<head>
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

include_once('./header.php');
?>

<?php


include_once('./loader.php');
?>

    <div id="bgPic" class="text-center">
        <br><br><br><br>
        <h2>CONTACT US</h2>
        <br>
        <h6><a href="index.php">HOME</a> <span>/</span> CONTACT</h6>
        <br><br><br><br>
    </div>

    <br><br><br>

    <div class="contactDiv">
        <div class="contactHead text-left">

            <h2><?php echo $contact_header ?></h2>
            <p><?php echo $contact_text1.$contact_text2.$contact_text3.$contact_text4 ?></p>
        </div>
        <div class="contactFoot">
            <div class="contactFootLt"><br>
                <div class="contactFootLtDiv">
                    <div class="contactFootLtDivLt text-center">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contactFootLtDivRt">
                        <h5>Phone</h5>
                        <p><?php echo $primaryContactNumber ?><br><?php echo $secondaryContactNumber ?></p>
                    </div><br>
                </div>

                <div class="contactFootLtDiv">
                    <div class="contactFootLtDivLt text-center">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contactFootLtDivRt">
                        <h5>Email</h5>
                        <p><?php echo $primaryEmailAddress ?></p>
                    </div><br>
                </div>

                <div class="contactFootLtDiv">
                    <div class="contactFootLtDivLt text-center">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="contactFootLtDivRt">
                        <h5>Address</h5>
                        <p><?php echo $addressLine1 ?></p>
                        <!-- <p><?php echo $addressLine2 ?></p> -->
                    </div><br>
                </div>
            </div>

            <div class="contactFootRt"><br>
                <div class="contactForm">
                    <form action="./mail.php" method="POST"
                        enctype="text/plain">
                        <table><br>
                            <tr>
                                <td><input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name"></td>
                                <td><input type="email" name="email" class="form-control" id="mail"
                                        placeholder="Your Email"></td>
                            </tr>

                            <tr>
                                <td><input type="text" name="subject" class="form-control" id="sub" placeholder="Subject">
                                </td>
                                <td><input type="number" name="number" class="form-control" id="num"
                                        placeholder="Phone Number"></td>
                            </tr>
                        </table><br>
                        <textarea rows="3" id="message" name="message" placeholder=" Your Message"></textarea><br><br>
                        <button type="submit" class="construct-btn">Request Quote</button><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>


 
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

    <script type="text/javascript">


    </script>
</body>

</html>