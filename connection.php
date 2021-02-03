<?php

 
    // $con=mysqli_connect("shareddb-v.hosting.stackcp.net","demoacct-313437e756","asdadsad12121","demoacct-313437e756");
    //  $con=mysqli_connect("localhost","admin","","theterminatos");
$con=mysqli_connect("localhost","root","","theterminatos");    
// $con=mysqli_connect("localhost","root","","theterminators");    

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
else {
    // echo "working";
}
?>