<?php 
require_once('./connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:../admin/index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
        $username = $_POST['UName'];
        $password = $_POST['Password'];

            $query="Select * from login_info where username='$username' and user_password='$password'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$username;
                header("location:wellcome.php");
            }
            else
            {
                header("location:../admin/index.php?login=1");
            }
       }
       
    // echo "GREAT";
    }
    // echo "GREAT";
    
?>