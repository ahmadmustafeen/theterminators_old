<?php
include_once('../connection.php');
session_start();
date_default_timezone_set("Asia/Karachi");
if(isset($_SESSION['User']))
{
include_once("../Genericfunctions/uploadToFolder.php");
include_once("../connection.php");
include_once("./printMessage.php");
$status = "";



// updating Logo
if(isset($_POST['header'])){
    unlink("../siteDetails/logo.png");
     if(upload_img("logo.png","logo","../siteDetails/")){
        $status= "Logo Successfully Added";
     }
     else{
        $status= "There was an Error Uploading the Error";
     }
    return printMessage($status);
}




// updating home page
if(isset($_POST['home'])){
    $servicesHeading = $_POST['serviceHeading'];
    $contactHeading = $_POST['contactHeading'];
    $servicesParagraph = $_POST['serviceParagraph'];
    $contactParagraph = $_POST['contactParagraph'];
    $gettingStarted = $_POST['gettingStarted'];
    $contactQ="UPDATE `contact` SET
     `contact_header`='$contactHeading',
     `contact_text1`= '$contactParagraph' WHERE 1";
    
    $servicesQ="UPDATE `service` SET 
    `services_header`='$servicesHeading',
    `services_text1`='$servicesParagraph' WHERE 1";
    
    $gettingStartedQ="UPDATE `getting_started` SET `getting_s_t`='$gettingStarted' WHERE 1";
    if($con->query($contactQ)&&$con->query($servicesQ)&&$con->query($gettingStartedQ)){
        $status="Info Successfully Updated!";
        return printMessage($status);
    }    
}

// updaing gallery image
$exist = false;
if(isset($_POST['addGallery'])){
    $gallery_name = $_POST['gallery_name'];
    $category_id = $_POST['category_id'];
   
    $gallery_name_Q  = mysqli_query($con,"SELECT * FROM `gallery` WHERE gallery_name = '$gallery_name'");
        while($row = mysqli_fetch_assoc($gallery_name_Q)){
            $status="Kindly Change the name of the gallery and try again...";
            $exist = true;
        }
        if($exist) return printMessage($status);
    $sql = "INSERT INTO `gallery`( `gallery_name`,`categories_id`) VALUES ('$gallery_name','$category_id')";
    if($con -> query($sql)){
        $service_Q  = mysqli_query($con,"SELECT * FROM `gallery` WHERE 1");
        while($row = mysqli_fetch_assoc($service_Q)) $gallery_id = $row['gallery_id'];  
    }
    else return printMessage($status);
    
    if(upload_img("gallery".$gallery_id.".png","gallery","../Gallery/")) {
     
        $status= "Gallery Image Successfully Uploaded"; 
        return printMessage($status); 
    } 
    else { $status= "There was an Error Uploading the Image";
        printMessage($status);
    }
}


$exist = false;
if(isset($_POST['addPortfolio'])){
    $portfolio_name = $_POST['portfolio_name'];
    $portfolio_name_Q  = mysqli_query($con,"SELECT * FROM `portfolio` WHERE portfolio_name = '$portfolio_name'");
        while($row = mysqli_fetch_assoc($portfolio_name_Q)){
            $status="Kindly Change the name of the portfolio and try again...";
            $exist = true;
        }
        if($exist) return printMessage($status);
    $sql = "INSERT INTO `portfolio`( `portfolio_name`) VALUES ('$portfolio_name')";
    if($con -> query($sql)){
        $service_Q  = mysqli_query($con,"SELECT * FROM `portfolio` WHERE 1");
        while($row = mysqli_fetch_assoc($service_Q)) $portfolio_id = $row['portfolio_id'];  
    }
    else return printMessage($status);
    
    if(upload_img("portfolio".$portfolio_id.".png","portfolio","../Portfolio/")) {
     
        $status= "Portfolio Image Successfully Uploaded"; 
        return printMessage($status); 
    } 
    else { $status= "There was an Error Uploading the Image";
        printMessage($status);
    }
}



$exist = false;
if(isset($_POST['addEvent'])){
    $event_name = $_POST['event_name'];

    $event_name_Q  = mysqli_query($con,"SELECT * FROM `events` WHERE event_name = '$event_name'");
        while($row = mysqli_fetch_assoc($event_name_Q)){
            $status="Kindly Change the name of the Event and try again...";
            $exist = true;
        }
        if($exist) return printMessage($status);
    $sql = "INSERT INTO `events`( `event_name`) VALUES ('$event_name')";
    if($con -> query($sql)){
        $event_Q  = mysqli_query($con,"SELECT * FROM `events` WHERE 1");
        while($row = mysqli_fetch_assoc($event_Q)) $event_id = $row['event_id'];  
    }
    else return printMessage($status);
    
    if(upload_img("event".$event_id.".png","eventImage","../Event/")) {
        $status= "Event Image Successfully Uploaded"; 
        return printMessage($status); 
    } 
    else { $status= "There was an Error Uploading the Image";
        printMessage($status);
    }
}




$exist = false;
if(isset($_POST['addRegistration'])){
    $registration_name = $_POST['registration_name'];

    $registration_name_Q  = mysqli_query($con,"SELECT * FROM `registrations` WHERE registration_name = '$registration_name'");
        while($row = mysqli_fetch_assoc($registration_name_Q)){
            $status="Kindly Change the name of the registration and try again...";
            $exist = true;
        }
        if($exist) return printMessage($status);
    $sql = "INSERT INTO `registrations`( `registration_name`) VALUES ('$registration_name')";
    if($con -> query($sql)){
        $registration_Q  = mysqli_query($con,"SELECT * FROM `registrations` WHERE 1");
        while($row = mysqli_fetch_assoc($registration_Q)) $registration_id = $row['registration_id'];  
    }
    else return printMessage($status);
    
    if(upload_img("registration".$registration_id.".png","registrationImage","../registration/")) {
        $status= "registration Image Successfully Uploaded"; 
        return printMessage($status); 
    } 
    else { $status= "There was an Error Uploading the Image";
        printMessage($status);
    }
}






 
if(isset($_POST['contactinfo'])){
    $primaryContactNumber=$_POST['primaryContactNumber'];
    $secondaryContactNumber=$_POST['secondaryContactNumber'];
    $primaryEmailAddress=$_POST['primaryEmailAddress'];
    $addressLine1=$_POST['addressLine1'];
    $addressLine2=$_POST['addressLine2'];
    $siteDetails=$_POST['siteDetails'];
    $updateQ = "UPDATE `contactdetails` SET
     `primaryContactNumber`='$primaryContactNumber',
     `secondaryContactNumber`='$secondaryContactNumber',
     `primaryEmailAddress`='$primaryEmailAddress',
     `addressLine1`='$addressLine1',
     `addressLine2`='$addressLine2',
     `siteDetails`='$siteDetails'
      WHERE 1";
      if($con -> query($updateQ)){
          $status="You have successfully  updated contact information";
          return printMessage($status); 
      }else{
        $status="Something went wrong in updating Contact Information";
        return printMessage($status); 
      }
}

//

if(isset($_POST['addSlider'])){
    $sliderNumber = $_POST['sliderNumber'];
    unlink("../slider/portfolio".$sliderNumber.".png");
    $sliderHeading = $_POST['sliderHeading'];
    $sliderText = $_POST['sliderParagraph'];
    $slider_heading = "slider".$sliderNumber."_heading";
    $slider_text = "slider".$sliderNumber."_text";
    $updateQ = "UPDATE `slider` SET `$slider_heading`='$sliderHeading',`$slider_text`='$sliderText' WHERE 1";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while updating heading and text";
        return printMessage($status); 
    }
    if(upload_img("portfolio".$sliderNumber.".png","sliderImage","../slider/")) {
        $status= "Portfolio Image Successfully Uploaded"; 
        return printMessage($status); 
    }





}




if(isset($_POST['addService'])){
    $serviceNumber = $_POST['serviceNumber'];
    unlink("../services/service".$serviceNumber.".png");
    $serviceHeading = $_POST['serviceHeading'];
    $serviceText = $_POST['serviceText'];
    $service_heading = "heading".$serviceNumber;
    $service_text = "text".$serviceNumber;
    $updateQ = "UPDATE `services` SET `$service_heading`='$serviceHeading',`$service_text`='$serviceText' WHERE 1";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while updating heading and text";
        return printMessage($status); 
    }
    if(upload_img("service".$serviceNumber.".png","serviceImage","../services/")) {
        $status= "Service is Successfully Updated"; 
        return printMessage($status); 
    }





}





if(isset($_POST['deleteGallery'])){
    $gallery_id=$_POST['galleryID'];
    $updateQ="DELETE FROM `gallery` WHERE gallery_id='$gallery_id'";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while deleting Gallery image.";
        return printMessage($status);
    }
    else{
    if(unlink("../Gallery/gallery".$gallery_id.".png")){
        $status="Successfully deleted Gallery image.";
        return printMessage($status);
    }
    }

}


if(isset($_POST['deleteCategory'])){
    $category_id=$_POST['categoryID'];
    $updateQ="DELETE FROM `categories` WHERE category_id='$category_id'";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while deleting Category.";
        return printMessage($status);
    }
    else{
        $status="Successfully deleted Category.";
        return printMessage($status);
    }

}






if(isset($_POST['deletePortfolio'])){
    $portfolioID=$_POST['portfolioID'];
    $updateQ="DELETE FROM `portfolio` WHERE portfolio_id='$portfolioID'";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while deleting Portfolio image.";
        return printMessage($status);
    }
    else{
    if(unlink("../Portfolio/portfolio".$portfolioID.".png")){
        $status="Successfully deleted Portfolio image.";
        return printMessage($status);
    }
    }

}



if(isset($_POST['deleteEvent'])){
    $eventID=$_POST['eventID'];
    $updateQ="DELETE FROM `events` WHERE event_id='$eventID'";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while deleting event image.";
        return printMessage($status);
    }
    else{
    if(unlink("../Event/event".$eventID.".png")){
        $status="Successfully deleted Event image.";
        return printMessage($status);
    }
    }

}



if(isset($_POST['deleteRegistration'])){
    $registrationID=$_POST['registrationID'];
    $updateQ="DELETE FROM `registrations` WHERE registration_id='$registrationID'";
    if(!($con -> query($updateQ))){
        $status="Something went wrong while deleting Registration image.";
        return printMessage($status);
    }
    else{
    if(unlink("../registration/registration".$registrationID.".png")){
        $status="Successfully Deleted Registration image.";
        return printMessage($status);
    }
    }

}

if(isset($_POST['addAboutUs'])){
    $aboutText1 = $_POST['aboutText1'];
    $aboutText2 = $_POST['aboutText2'];
    $aboutText3 = $_POST['aboutText3'];

$aboutText1a = substr($aboutText1,0,255);
$aboutText1b = substr($aboutText1,255,255);
$aboutText1c = substr($aboutText1,512,255);
$aboutText1d = substr($aboutText1,765,255);


$aboutText2a = substr($aboutText2,0,255);
$aboutText2b = substr($aboutText2,255,255);
$aboutText2c = substr($aboutText2,512,255);
$aboutText2d = substr($aboutText2,765,255);

$aboutText3a = substr($aboutText3,0,255);
$aboutText3b = substr($aboutText3,255,255);
$aboutText3c = substr($aboutText3,512,255);
$aboutText3d = substr($aboutText3,765,255);



    $aboutHeading1 = $_POST['aboutHeading1'];
    $aboutHeading2 = $_POST['aboutHeading2'];
    $aboutHeading3 = $_POST['aboutHeading3'];







    $updateQ="UPDATE `addaboutus` SET 
`aboutText1b`='$aboutText1a',
`aboutText2b`='$aboutText2a',
`aboutText3b`='$aboutText3a',
`aboutText1c`='$aboutText1b',
`aboutText2c`='$aboutText2b',
`aboutText3c`='$aboutText3b',
`aboutText1d`='$aboutText1c',
`aboutText2d`='$aboutText2c',
`aboutText3d`='$aboutText3c',
`aboutText1e`='$aboutText1d',
`aboutText2e`='$aboutText2d',
`aboutText3e`='$aboutText3d',
`aboutHeading1`='$aboutHeading1',
`aboutHeading2`='$aboutHeading2',
`aboutHeading3`='$aboutHeading3'
 WHERE 1";









    if($con -> query($updateQ)){
        $status="Successfully Updated About us Info";
        return printMessage($status);
    }
    else{
        $status="Something went wrong while Updating about Info";
        return printMessage($status);
    }
}

if(isset($_POST['about'])){
    $aboutHeading = $_POST['aboutHeading'];
    $aboutText= $_POST['aboutText'];
    $aboutMain = $_POST['aboutMain'];
    $aboutTextDesc= $_POST['aboutTextDesc'];
    $updateQ="UPDATE `about` SET `aboutHeader`='$aboutHeading',`aboutText`='$aboutText',`aboutmain`='$aboutMain',`aboutmaindesc`='$aboutTextDesc' WHERE 1";
    if($con->query($updateQ)){
        $status="Successfully Updated About us Content";
        return printMessage($status);
    }
    else{
        $status="Something went wrong while Updating about content";
        return printMessage($status);
    }

}

if(isset($_POST['priorities'])){
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $firstHeading = $_POST['firstHeading'];
    $firstParagraph = $_POST['firstParagraph'];
    $secondHeading = $_POST['secondHeading'];
    $secondParagraph = $_POST['secondParagraph'];
    $thirdHeading = $_POST['thirdHeading'];
    $thirdParagraph = $_POST['thirdParagraph'];
    $fourthHeading = $_POST['fourthHeading'];
    $fourthParagraph = $_POST['fourthParagraph'];
    $fifthHeading = $_POST['fifthHeading'];
    $fifthParagraph = $_POST['fifthParagraph'];
    $sixthHeading = $_POST['sixthHeading'];
    $sixthParagraph = $_POST['sixthParagraph'];
    $updateQ="UPDATE `priorities` SET `heading`='$heading',`description`='$description',`firstHeading`='$firstHeading',`firstParagraph`='$firstParagraph',`secondHeading`='$secondHeading',`secondParagraph`='$secondParagraph',`thirdHeading`='$thirdHeading',`thirdParagraph`='$thirdParagraph',`fourthHeading`='$fourthHeading',`fourthParagraph`='$fourthParagraph',`fifthHeading`='$fifthHeading',`fifthParagraph`='$fifthParagraph',`sixthHeading`='$sixthHeading',`sixthParagraph`='$sixthParagraph' WHERE 1";
    if($con->query($updateQ)){
        $status="Successfully Updated Priorities";
        return printMessage($status);
    }
    else{
        $status="Something went wrong while Updating Priorities";
        return printMessage($status);
    }
}

if(isset($_POST['addSocial'])){
    $facebook = $_POST['facebook'];
    $linkedIn = $_POST['linkedIn'];
    $updateQ="UPDATE `social_links` SET `facebook`='$facebook',`linkedIn`='$linkedIn' WHERE 1";
    if($con->query($updateQ)){
        $status="Successfully Updated Social Links";
        return printMessage($status);
    }
    else{
        $status="Something went wrong while Updating Social Links";
        return printMessage($status);
    }
}


if(isset($_POST['addNewCategory'])){
    $exist = false;
    $category_name = $_POST['category_name'];
    $category_name_Q  = mysqli_query($con,"SELECT * FROM `categories` WHERE category_name = '$category_name'");
        while($row = mysqli_fetch_assoc($category_name_Q)){
            $status="Kindly Change the name of the category and try again...";
            $exist = true;
        }
        if($exist) return printMessage($status);
    $sql = "INSERT INTO `categories`( `category_name`) VALUES ('$category_name')";
    if($con -> query($sql)){
        $service_Q  = mysqli_query($con,"SELECT * FROM `categories` WHERE 1");
        while($row = mysqli_fetch_assoc($service_Q)) $category_id = $row['category_id'];  
    }
    else return printMessage($status);
    
    if(upload_img("category".$category_id.".png","category","../Categories/")) return printMessage("category Image Successfully Uploaded"); 
    else printMessage( "There was an Error Uploading the Image");
}
// function printMessage($str) {echo $str;}
// printMessage($status);

}

else{
    header("location:../index.php");
}


?>