<?php
	include_once 'autoLoader.php';  
?>
<!DOCTYPE html>
<html>
<head>
	<title>DateHack:Now It's Your Time To Mingle</title>
	<!-- meta tags -->
	<meta charset="UTF-8">
  	<meta name="description" content="This is Hackthon DateHack Web Application designed and developed by Team CodexOrient Nami College">
  	<meta name="keywords" content="DateHack, Team CodexOrient, Search your date patner">
  	<meta name="author" content="Team Codex Orient">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- end of meta tags -->

	<!-- links -->
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/css/style.css">
	<!-- end links  -->
</head>
<body>
	<!-- header -->
	<header class="">
		<div class="img-logo"><img src="<?= base_url?>/images/app/logo.png" alt="Datemandu Logo"></div>
		<div class="head-wrapper">
			<div class="login-wrapper">Login</div>
			<div class="register-wrapper">Register</div>
		</div>
	</header>
	<!-- End of Header -->

	<!-- Section -->
	<section class="body-section">
		<div class="body-main"></div>
		<div class="body-color"></div>
		<div class="main-text">Meet new and intersting people.</div>
		<div class="main-sm-text">Some default text to fell the space</div>
		<div class="main-buttons d-flex">
			<div class="hm-btn">Get Start</div>
			<div class="hm-btn">Know More</div>
		</div>
	</section>
	<!-- End of section -->
	<!-- About Us -->
	<div id="about-us">
		<div class="upper-line"></div>
		<div class="ab-text">How Datemandu Works</div>

		<div class="ab-card">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?= base_url?>images/background.jpg" alt="Card image cap">
				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?= base_url?>images/background.svg" alt="Card image cap">
				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>


			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="<?= base_url?>images/background.svg" alt="Card image cap">
				<div class="card-body">
    				<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				</div>
			</div>
		</div>
	</div>
	<!-- End  -->
	<!-- Services -->
	<div id="services">
		<div class="upper-line"></div>
		<div class="ab-text">Our Happy Users</div>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					Hi
				</div>
				<div class="carousel-item">
					Namestry
				</div>
				<div class="carousel-item">
					hello
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>


	</div>
	<!-- End of services -->

	<!-- script -->
	<script type="text/javascript" src="<?= base_url?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- end script -->
</body>
</html>