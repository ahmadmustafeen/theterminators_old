

<?php 
include_once('./adminz/connection.php');



$i=1;
if(isset($_GET['id']))$i=$_GET['id'];


if($i==1){
$table_name="TOOLS";
}
else if($i==2){
$table_name="PROFESSIONAL STRENGTH";
}

$service_info  = mysqli_query($con,"SELECT `service_id`, `service_heading` FROM `services_text` WHERE 1"); 
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
        <h2>OUR <?php echo $table_name?></h2>
        <br>
        <h6><a href="index.php">HOME</a> <span>/</span> <?php echo $table_name?></h6>
        <br><br><br><br>
    </div>

    <br>
    <table class="table">
        <tr>
            <td>
                <h4>Serial Number</h4>
            </td>
            <td>
                <h4>Instrument Name</h4>
            </td>
            <td>
                <h4>Instrument Quantity</h4>
            </td>
        </tr>
        <tr>
            <td>
                <p>1</p>
            </td>
            <td>
                <p>Drilling machine</p>
            </td>
            <td>
                <p>Instrument Quantity</p>
            </td>
        </tr>
    </table>

   
  

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
    <script src="js/certModal.js"></script>
<script>
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  console.log("press");
  document.getElementById("myModal").style.display = "none";
}
</script>

</body>

</html>

<style>
.anchor{
    background-color:red
}
.services-tag{
    padding:50px
}

.services-tag h3{
    padding:20px;
    color:black; 
    background-color:rgba(0,0,0,0.1);
       /* width:fit-content */
}
.services-tag h3:hover{
    
    background-color:rgba(0,0,0,0.3);
    cursor:pointer
}
.services-tag a{
    color:black;
    width:fit-content
}
 .table {
        background-color: black;
    }

    .table td {
        background-color: white;
        justify-content: center;
        align-items: center;
        text-align: center;
    }


@media all and (max-width: 480px) {
.table h4{
font-size:14px
}
}
</style>

