<?php
include_once('../connection.php');
session_start();
date_default_timezone_set("Asia/Karachi");
if(isset($_SESSION['User']))
{
$registration_info  = mysqli_query($con,"SELECT 
`heading`, 
`description`, 
`firstHeading`,
 `firstParagraph`, 
 `secondHeading`, 
 `secondParagraph`, 
 `thirdHeading`, 
 `thirdParagraph`, 
 `fourthHeading`, 
 `fourthParagraph`, 
 `fifthHeading`, 
 `fifthParagraph`,
  `sixthHeading`, 
  `sixthParagraph`
   FROM `priorities` WHERE 1"); 
while($row = mysqli_fetch_assoc($registration_info)){
    $heading = $row["heading"];
    $description = $row["description"];
    $firstHeading = $row["firstHeading"];
    $firstParagraph = $row["firstParagraph"];
    $secondHeading = $row["secondHeading"];
    $secondParagraph = $row["secondParagraph"];
    $thirdHeading = $row["thirdHeading"];
    $thirdParagraph = $row["thirdParagraph"];
    $fourthHeading = $row["fourthHeading"];
    $fourthParagraph = $row["fourthParagraph"];
    $fifthHeading = $row["fifthHeading"];
    $fifthParagraph = $row["fifthParagraph"];
    $sixthHeading = $row["sixthHeading"];
    $sixthParagraph = $row["sixthParagraph"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dashboard-index.css">
    <link rel="stylesheet" href="../teacher-portal.css">
    <script src="../script/dashbaord.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel</title>
</head>



<?php if(isset($_GET['no_Record_found'])){
            ?>
<script>
alert("Class does'nt exist!");
</script>
<?php
            }?>

<body>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard-inner select-admin-main" id="main-bar">
            <div class="floating-menu">
                <button id="floating">X</button>
            </div>

            <div class="dashboard-inner-main-graph">
                The Terminators (Priorities Page)
            </div>

            <div class="dashboard-inner-teacher dashboard-dit-heading">
                <div class="dit-heading">
                    <form action="./success.php" method="post">
                        <table>
                        <tr>
                                <td>
                                    <h3>Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="heading" value="<?php echo $heading ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Description</h3>
                                </td>
                                <td>
                                    <input type="text" name="description" value="<?php echo $description ?>">
                                </td>
                            </tr>
                        <tr>
                                <td>
                                    <h3>First Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="firstHeading" value="<?php echo $firstHeading ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>First Paragraph</h3>
                                </td>
                                <td>
                                    <input type="text" name="firstParagraph" value="<?php echo $firstParagraph ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Second Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="secondHeading" value="<?php echo $secondHeading ?>">
                                </td>
                            </tr>  <tr>
                                <td>
                                    <h3>Second Paragraph</h3>
                                </td>
                                <td>
                                    <input type="text" name="secondParagraph" value="<?php echo $secondParagraph ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Third Paragraph</h3>
                                </td>
                                <td>
                                    <input type="text" name="thirdParagraph" value="<?php echo $thirdParagraph ?>">
                                </td>
                            </tr> <tr>
                                <td>
                                    <h3>Third Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="thirdHeading" value="<?php echo $thirdHeading ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Fourth Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="fourthHeading" value="<?php echo $fourthHeading ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Fourth Paragraph</h3>
                                </td>
                                <td>
                                    <input type="text" name="fourthParagraph" value="<?php echo $fourthParagraph ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Fifth Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="fifthHeading" value="<?php echo $fifthHeading ?>">
                                </td>
                            </tr> <tr>
                                <td>
                                    <h3>Fifth Paragraph</h3>
                                </td>
                                <td>
                                    <input type="text" name="fifthParagraph"value="<?php echo $fifthParagraph ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Sixth Heading</h3>
                                </td>
                                <td>
                                    <input type="text" name="sixthHeading" value="<?php echo $sixthHeading ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Sixth Paragraph</h3>
                                </td>
                                <td>
                                    <input type="text" name="sixthParagraph" value="<?php echo $sixthParagraph ?>">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <div class="button-col">
                                      
                                          
                                            <button type="submit" name="priorities">Update</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>





        </div>
</body>

</html>

<style>
*,
*::before,
*::after {
    box-sizing: border-box
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.avatar {
    min-width: 200px;
    border-radius: 50%;
    background-size: cover;
    background-position: center;
    position: relative;
}

.avatar::before,
.avatar::after {
    --scale: 0;
    --arrow-size: 20px;
    --tooltip-color: #2196f3;
    position: absolute;
    z-index: 999;
    top: -.25rem;
    font-size: 18px !important;
    font-weight: 400 !important;
    left: 50%;
    transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
    transition: 150ms transform;
    transform-origin: bottom center;
}

.avatar::before {
    --translate-y: calc(-100% - var(--arrow-size));
    content: attr(data-tooltip);
    color: white;
    padding: .5rem;
    border-radius: .3rem;
    text-align: center;
    width: max-content;
    max-width: 100%;
    background: var(--tooltip-color);
}

.avatar:hover::before,
.avatar:hover::after {
    --scale: 1;
}

.avatar::after {
    --translate-y: calc(-1 * var(--arrow-size));

    content: '';
    border: var(--arrow-size) solid transparent;
    border-top-color: var(--tooltip-color);
    transform-origin: top center;
}
</style>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script>
if ($(window).width() > 768) {
    $('#sidebar').hover(function() {
            // alert("done");
            $(this).addClass('sidebar-opened');
            $(".row-sidebar-text").addClass('text-opened');
            $('.icon-sidebar').css('margin', '0px');
            $('.row-sidebar').css('padding', '0px 10px');
        },
        function() {
            $(this).removeClass('sidebar-opened');
            $(".row-sidebar-text").removeClass('text-opened');
            $(".dashboard-inner").removeClass('da');
            $('.icon-sidebar').css('margin', 'auto');
            $('.row-sidebar').css('padding', '0px');
        }
    );
}
</script>







<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>
</body>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<!-- <script src="../assests/script/dashbaord.js"></script> -->
<!-- <script src="./jquery.min.js"></script> -->

</html>
<?php
// }
// else{
//     header("location:../login.html");

// }
}

else{
    header("location:../index.php");
}