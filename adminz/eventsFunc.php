
    <?php
   

$target_dir = "event/";


require_once('./connection.php');

function upload_img($name_to_be_saved,$var_name,$target_dir){
   
    $target_file1 = $target_dir . basename($name_to_be_saved);
    $uploadOk1 = 1;
    $imageFileType1  = pathinfo($target_file1,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES[$var_name]["tmp_name"]);
        if($check !== false) {
            $uploadOk1 = 1;
        } else {
            $uploadOk1 = 0;
        }
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" 
    && $imageFileType1 != "gif" ) {
        $uploadOk1 = 0;
    }
    if ($uploadOk1 == 0) {
    } 
    else {
        if (move_uploaded_file($_FILES[$var_name]["tmp_name"], $target_file1)) {
        
        } else {
         
        }
    }
}










$eventAddQ = "INSERT INTO `events`(`event_name`) VALUES ('another event')";
$con -> query($eventAddQ);



$eventsFuncQ  = mysqli_query($con,"SELECT `event_id` FROM `events` WHERE 1"); 
while($row = mysqli_fetch_assoc($eventsFuncQ)){
    $event_id = $row['event_id'];
}
$event_name = "eventnumber".$event_id.".jpg";
 upload_img($event_name,'eventPic',$target_dir);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
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
                    Event Updated Successfully
                </h2>
            </div>
        </div>
    </div>
</body>

</html>
