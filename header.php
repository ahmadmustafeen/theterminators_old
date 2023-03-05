
<?php
require_once('./connection.php');
$contact_info  = mysqli_query($con,"SELECT `primaryContactNumber`, `secondaryContactNumber`, `primaryEmailAddress`, `addressLine1`, `addressLine2` FROM `contactdetails` WHERE 1");
while($row = mysqli_fetch_assoc($contact_info)){
    $primaryContactNumber = $row['primaryContactNumber'];
    $secondaryContactNumber = $row['secondaryContactNumber'];
    $primaryEmailAddress = $row['primaryEmailAddress'];
    $addressLine1 = $row['addressLine1'];
    $addressLine2 = $row['addressLine2'];
}

$social_Q  = mysqli_query($con,"SELECT `facebook`, `linkedIn` FROM `social_links` WHERE 1");
while($row = mysqli_fetch_assoc($social_Q)){
    $facebook = $row['facebook'];
    $linkedIn = $row['linkedIn'];
}

?>

<div class="header">
	<div class="headerTop clearfix">
			<div class="headerTopLt float-left">
			<h6>Have any question? <?php echo $primaryContactNumber ?></h6>
			</div>
			<div class="headerTopRt float-right">
				<div class="headerTopLinks float-right">
					<a href="<?php echo $facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="<?php echo $linkedIn?>" target="_blank"><i class="fab fa-linkedin"></i></a>
					<!-- <a href="#"><i class="fab fa-twitter-square"></i></a>
					<a href="#"><i class="fab fa-skype"></i></a>
					<a href="#"><i class="fab fa-pinterest"></i></a> -->
				</div>
			</div>
	</div>
	<div class="headerBot clearfix">
		<a href='index.php'><img src="./siteDetails/logo.png"></a>
		<div class="headerBotBox float-right">
			<div class="headBotBox"><i class="fas fa-phone-alt"></i><p><span>Call Us At</span><br>
      <?php echo $secondaryContactNumber ?></p></div>
			<div class="headBotBox"><i class="fas fa-envelope"></i><p><span>Mail Us At</span><br>
			<?php echo $primaryEmailAddress ?></p></div>
		</div>
	</div>
</div> 

<nav class="nav navbar navbar-expand-lg clearfix">
  <button class="navbar-toggler text-secondary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="searchoff()">
     <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="register.php">REGISTRATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portfolio.php">PORTFOLIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clients.php">CLIENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
     
    </ul>

  </div>
	<div class="navIcon float-right" id="search">
		<!-- <i class="fas fa-search"></i> -->
	</div>
</nav>
