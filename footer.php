<?php
require_once('./connection.php');
$contact_info  = mysqli_query($con,"SELECT `primaryContactNumber`,`siteDetails`, `secondaryContactNumber`, `primaryEmailAddress`, `addressLine1`, `addressLine2` FROM `contactdetails` WHERE 1");
while($row = mysqli_fetch_assoc($contact_info)){
    $primaryContactNumber = $row["primaryContactNumber"];
    $secondaryContactNumber = $row["secondaryContactNumber"];
    $primaryEmailAddress = $row["primaryEmailAddress"];
    $addressLine1 = $row["addressLine1"];
    $addressLine2 = $row["addressLine2"];
    $siteDetails = $row['siteDetails'];
}
$social_Q  = mysqli_query($con,"SELECT `facebook`, `linkedIn` FROM `social_links` WHERE 1");
while($row = mysqli_fetch_assoc($social_Q)){
    $facebook = $row['facebook'];
    $linkedIn = $row['linkedIn'];
}
?>
<div class="footer">
    <br><br>
    <div class="footerTop">
        <div class="footerTopBox footBox1">
            <img src="./siteDetails/logo.png" class="footLogo"><br>
            <p><?php echo $siteDetails?></p><br>

        </div>
        <div class="footerTopBox footBox2">
            <br>
            <h4>QUICK LINKS</h4><br>
            <ul>
                <a href="about.php">
                    <li><i class="fas fa-chevron-right"></i> &nbsp;&nbsp; About Us</li>
                </a>
                <a href="services.php">
                    <li><i class="fas fa-chevron-right"></i> &nbsp;&nbsp; Our Services</li>
                </a>
                <!-- <a href="blogs.php">
                    <li><i class="fas fa-chevron-right"></i> &nbsp;&nbsp; Our Blogs</li>
                </a> -->
                <a href="event.php">
                    <li><i class="fas fa-chevron-right"></i> &nbsp;&nbsp; Our Event</li>
                </a>
                <a href="contact.php" class="lastLink">
                    <li><i class="fas fa-chevron-right"></i> &nbsp;&nbsp; Contact Us</li>
                </a>
            </ul><br>
        </div>
        <div class="footerTopBox footBox3">
            <br>
            <h4>HEAD OFFICE</h4><br>
            <p><?php echo $addressLine1?></p>
            <p><i class="fas fa-phone-alt"></i> &nbsp;&nbsp; <?php echo $primaryContactNumber?></p>
            <p><i class="fas fa-envelope"></i> &nbsp;&nbsp; <?php echo $primaryEmailAddress?></p>
            <p><i class="far fa-clock"></i> &nbsp;&nbsp;<?php echo "8:00-9:00"?></p>
            <br>
        </div>
        <div class="footerTopBox footBox1">
            <br>
            <h4>FOLLOW US</h4><br>
            <p>
                <a href="<?php echo $facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo $linkedIn?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <!-- <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-skype"></i></a> -->
            </p><br>
        </div>
        <br>
    </div>
    <br>
    <div class="footerBot">
        <p>Powered By Tenacious Innovation. All Rights Reserved.</p>
    </div>
</div>