<?php
include_once '../autoLoader.php';
session_start();
if(!isset($_SESSION['userDetails'])){
	header("location:../index.php");
}
else{
	if(empty($_SESSION['userDetails']['profile']) || $_SESSION['userDetails']['profile']===""){
		$profile_img = "default.png";
	}
	else{
		$profile_img = $_SESSION['userDetails']['profile'];
	}
}

$gender = $_SESSION['userDetails']['gender'];
$db = new Model\Database();
$controller = new controller\Home($db);


if($gender=="M"){
	$searchGender = "F";
}
else{
	$searchGender = "M";
}

$fetchUser = $db->seacrhPatner($searchGender);

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<!-- links -->
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/css/theme.css">
	<!-- end links  -->
</head>
<body>
	<div class="header-part">
		<div class="site-logo"><a href="index.php"><img src="<?= base_url?>/images/app/logo.png" alt="website Logo"></a></div>
		<div class="user-details">
			<a href="message.php"><i class="fas fa-comment-dots fa-2x"></i></a>
			<i class="fas fa-bell fa-2x"></i>
			<div class="profile-pic"><img class="rounded-circle" src="<?= base_url?>/images/user/<?php echo $profile_img;?>" alt="User Profile Pic"></div>
		</div>
	</div>

	<div class="user-body">
		<div class="user-nav">
			<div class="user-profile"><img class="rounded-circle" src="<?= base_url?>/images/user/<?php echo $profile_img;?>" alt="Profile Pic"><p><?php echo $_SESSION['userDetails']['first_name'].' '.$_SESSION['userDetails']['last_name']; ?></p></div>

			<div class="user-profile"><i class="fas fa-users fa-3x"></i><p>Find Match</p></div>
			<div class="user-profile"><i class="fa fa-heart fa-lg fa-3x"></i><p>Matches</p></div>
			<div class="user-profile"><i class="fas fa-thumbs-up fa-lg fa-3x"></i><p>Likes</p></div>
			<div class="user-profile"><i class="fas fa-sign-out-alt  fa-3x"></i><p style="cursor: pointer;"><a style="color: #000;text-decoration: none;"href="signout.php">Sign Out</a></p></div>
		</div>
		<div class="user-finder">
			<div class="user-radius"><span style="color: #C73DCC">User</span> located with in  <span id="distance" style="color: #C73DCC"><?php echo "2"; ?></span> K.M.</div>

			<!-- Care -->
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="100000000000000">
    				<div class="card" style="width: 18rem;">
  						<img class="card-img-top" src="..." alt="Card image cap">
					  	<div class="card-body">
					    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  	</div>
					</div>
    			</div>

    			<?php foreach ($fetchUser as $key => $user) {
    				if($key==0){
    					$active = "active";
    				}
    				else{
    					$active = "";
    				}
    			?>
    			<div class="carousel-item <?php echo $active; ?>" data-bs-interval="100000000000000">
    				<div class="card" style="width: 18rem;">
  						<img class="card-img-top" src="<?= base_url?>/images/user/<?php echo $profile_img;?>" alt="Card image cap">
					  	<div class="card-body">
					    	<p class="card-text">Name:- <?php echo $user['first_name'].' '.$user['last_name']; ?><br>Zodiac :-<?php echo $controller->zodiacFinder($user['date_of_birth']); ?><br>Match :- <?php echo rand(25,95)."%"; ?><br>Description:- Here is user details.This can also be knows as the users details that the user can see and request for the follow request.</p>
					    	<div class="follow-request">
					    		<div class="accepts"><i class="fas fa-check fa-2x"></i></div>
					    		<div class="reject"><i class="fas fa-times-circle fa-2x"></i></div>
					    	</div>
					  	</div>
					</div>
    			</div>
    			<?php } ?>

	  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev" onclick="changeDistance()">
	    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    		<span class="visually-hidden">Previous</span>
	  		</button>
	  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next" onclick="changeDistance()">
	    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	   			<span class="visually-hidden">Next</span>
	  		</button>
		</div>
		<!-- End  -->
		</div>

		
	</div>
	<script type="text/javascript" src="<?= base_url?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function changeDistance(){
			var distance = document.getElementById('distance');
			distance.innerHTML = "<?php echo rand(1,10);?>";
		}
	</script>
</body>
</html>