<?php
if(isset($_POST['home-submit'])){
    require_once('./connection.php');


    // getting values
    $services_header  = $_POST['service-header'];
    $getting_started  = $_POST['getting_started'];
    $services_text  = $_POST['service-text'];


    // breaking str
    if((strlen($services_text)<256)){
        $first256 = $services_text;
    }
    $second256 ='';$third256 ='';$rest = '';
    if(strlen($services_text)>256){
        $first256 = substr($services_text, 0, 256);
        $rest = substr($services_text, 256, (strlen($services_text)-256));
    }
    if(strlen($rest)>256){
        $second256 = substr($services_text, 256, 256);
        $rest = substr($services_text, 256, (strlen($services_text)-512));
    }
    if(strlen($rest)>256){
        $third256 = substr($services_text, 512, 256);
        $rest = substr($services_text, 256, (strlen($services_text)-768));
    }

    // updating
    $service_Q = "UPDATE `service` SET `services_header`='$services_header',`services_text1`='$first256',`services_text2`='$second256',`services_text3`='$third256',`services_text4`='$rest' WHERE 1";
   $con -> query($service_Q);

   $getting_started_Q = "UPDATE `getting_started` SET `getting_s_t`='$getting_started' WHERE 1";
   $con -> query($getting_started_Q);


//    contact
        $contact_header  = $_POST['contact_header'];
        $contact_text  = $_POST['contact_text'];
        if((strlen($contact_text)<256)){
            $first256 = $contact_text;
        }
        $second256 ='';$third256 ='';$rest = '';
        if(strlen($contact_text)>256){
            $first256 = substr($contact_text, 0, 256);
            $rest = substr($contact_text, 256, (strlen($contact_text)-256));
        }
        if(strlen($rest)>256){
            $second256 = substr($contact_text, 256, 256);
            $rest = substr($contact_text, 256, (strlen($contact_text)-512));
        }
        if(strlen($rest)>256){
            $third256 = substr($contact_text, 512, 256);
            $rest = substr($contact_text, 256, (strlen($contact_text)-768));
        }


        $contact_Q = "UPDATE `contact` SET `contact_header`='$contact_header',`contact_text1`='$first256',`contact_text2`='$second256',`contact_text3`='$third256',`contact_text4`='$rest' WHERE 1";
        $con -> query($contact_Q);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-header">
                    <h2>
                        The Terminators
                    </h2>
                </div>
                <div class="sidebar-menu">
                    <a href="./index.html">
                        <h3>Social Links</h3>
                    </a>
                    <a href="./home.html">
                        <h3>Home</h3>
                    </a>
                    <a href="">
                        <h3>Menu</h3>
                    </a>
                    <a href="">
                        <h3>Menu</h3>
                    </a>
                    <a href="">
                        <h3>Menu</h3>
                    </a>
                    <a href="">
                        <h3>Menu</h3>
                    </a>
                    <a href="">
                        <h3>Menu</h3>
                    </a>
                    <a href="">
                        <h3>Menu</h3>
                    </a>
                </div>
            </div>

        </div>
        <div class="mainbar">

            <div class="mainbar-form">
                <h2 style="text-align:center">
                    Updated Successfully
                </h2>
            </div>
        </div>
    </div>
</body>

</html>

<?php

}
else{
    // echo "NOT Accessible";
}


?>