
    <?php
    require_once('./connection.php');

$target_dir = "services/";
unlink("services/services-1.jpg");

unlink("services/services-2.jpg");

unlink("services/services-3.jpg");

unlink("services/services-4.jpg");

unlink("services/services-5.jpg");

unlink("services/services-6.jpg");





function upload_img($name_to_be_saved,$var_name,$target_dir){
    $target_file1 = $target_dir . basename($name_to_be_saved);
    $uploadOk1 = 1;
    $imageFileType1  = pathinfo($target_file1,PATHINFO_EXTENSION);
    // echo $imageFileType1;
  
        $check = getimagesize($_FILES[$var_name]["tmp_name"]);
        if($check !== false) {
            $uploadOk1 = 1;
        } else {
            $uploadOk1 = 0;
        }
    
    
    // Check file size
    // if ($_FILES[$var_name]["size"] > 500000) {
    //     $uploadOk1 = 0;
    // }
    // Allow certain file formats
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" 
    && $imageFileType1 != "gif" ) {
        $uploadOk1 = 0;
    }
    if ($uploadOk1 == 0) {
    //   echo 'sucess';
    } 
    else {
        if (move_uploaded_file($_FILES[$var_name]["tmp_name"], $target_file1)) {
        //   echo 
        //   'sucess';
        } else {
            // echo "failded";
         
        }
    }
    
}
upload_img("services-1.jpg","serviceimage1",$target_dir);
upload_img("services-2.jpg","serviceimage2",$target_dir);
upload_img("services-3.jpg","serviceimage3",$target_dir);
upload_img("services-4.jpg","serviceimage4",$target_dir);
upload_img("services-5.jpg","serviceimage5",$target_dir);
upload_img("services-6.jpg","serviceimage6",$target_dir);

$heading1 = "xxx";
$heading2 = "xxx";
$heading3 = "xxx";
$heading4 = "xxx";
$heading5 = "xxx";
$heading6 = "xxx";

$text1 = "xxx";
$text2 = "xxx";
$text3 = "xxx";
$text4 = "xxx";
$text5 = "xxx";
$text6 = "xxx";


if(isset($_POST['serviceheading1'])){
    $heading1 = $_POST['serviceheading1'];
}
if(isset($_POST['serviceheading2'])){
    $heading2 = $_POST['serviceheading2'];
}
if(isset($_POST['serviceheading3'])){
    $heading3 = $_POST['serviceheading3'];
}
if(isset($_POST['serviceheading4'])){
    $heading4 = $_POST['serviceheading4'];
}
if(isset($_POST['serviceheading5'])){
    $heading5 = $_POST['serviceheading5'];
}
if(isset($_POST['serviceheading6'])){
    $heading6 = $_POST['serviceheading6'];
}





if(isset($_POST['servicetext1'])){
    $text1 = $_POST['servicetext1'];
}
if(isset($_POST['servicetext2'])){
    $text2 = $_POST['servicetext2'];
}
if(isset($_POST['servicetext3'])){
    $text3 = $_POST['servicetext3'];
}
if(isset($_POST['servicetext4'])){
    $text4 = $_POST['servicetext4'];
}
if(isset($_POST['servicetext5'])){
    $text5 = $_POST['servicetext5'];
}
if(isset($_POST['servicetext6'])){
    $text6 = $_POST['servicetext6'];
}


$sql = "UPDATE `services` SET `heading1`='$heading1',`text1`='$text1',`heading2`='$heading2',`text2`='$text2',`heading3`='$heading3',`text3`='$text3',`heading4`='$heading4',`text4`='$text4',`heading5`='$heading5',`text5`='$text5',`heading6`='$heading5',`text6`='$text6' WHERE 1";
if($con -> query($sql)){
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
                    Something Went Wrong, Try Again Later.
                </h2>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}

?>