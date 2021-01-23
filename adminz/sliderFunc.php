
    <?php
    require_once('./connection.php');

$target_dir = "slider/";
unlink("slider/slider-1.jpg");

unlink("slider/slider-2.jpg");

unlink("slider/slider-3.jpg");

unlink("slider/slider-4.jpg");





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
upload_img("slider-1.jpg","fileToUpload1",$target_dir);
upload_img("slider-2.jpg","fileToUpload2",$target_dir);
upload_img("slider-3.jpg","fileToUpload3",$target_dir);
upload_img("slider-4.jpg","fileToUpload4",$target_dir);



$heading1 = $_POST['heading1'];
$heading2 = $_POST['heading2'];
$heading3 = $_POST['heading3'];
$heading4 = $_POST['heading4'];

$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$text4 = $_POST['text4'];

$sql = "UPDATE `slider` SET `slider1_heading`='$heading1',`slider2_heading`='$heading2',`slider3_heading`='$heading3',`slider4_heading`='$heading4',`slider1_text`='$text1',`slider2_text`='$text2',`slider3_text`='$text3',`slider4_text`='$text4' WHERE 1";
$con -> query($sql);

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