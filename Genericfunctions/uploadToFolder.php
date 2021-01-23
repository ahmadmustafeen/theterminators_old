<?php
function upload_img($name_to_be_saved,$var_name,$target_dir){
   $target_file1 = $target_dir . basename($name_to_be_saved);
   $uploadOk1 = 1;
   $imageFileType1  = pathinfo($target_file1,PATHINFO_EXTENSION);
   $check = getimagesize($_FILES[$var_name]["tmp_name"]);
   if($check === false || ($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 !== "gif" )) return false;
    move_uploaded_file($_FILES[$var_name]["tmp_name"], $target_file1);
    return true;
}
?>