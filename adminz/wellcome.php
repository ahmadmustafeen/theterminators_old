<?php
    session_start();
    require_once('./connection.php');

    if(isset($_SESSION['User']))
    {
        $username = $_SESSION['User'];
        header("location:../admin/index.php");
    }


?>
<html>
<h1> <a href="dashboard/index.php">DASHBOARD</a> </h1>

</html>