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
		<div class="user-message">
			<div class="chat-with">Chat With <span id="user-chat">Test User 1</span></div>
			<form>
				<textarea id="user_message"></textarea>
				<input id="send-btn" type="submit" name="send" value="Send">
			</form>
		</div>
		<div class="online-user">
			<div class="online">User Who Are Online</div>
			<div class="online-list">
				<?php
					for ($i=0; $i < 20; $i++) { 
				?>
				<div class="online-person" id="Test User <?php echo $i+1; ?>">Test Users <?php echo $i+1; ?> <i class="fas fa-dot-circle"></i></div>
				<?php } ?>
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="<?= base_url?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('.online-person').click(function(){
			$("#user-chat").html($(this).attr("id"))
		});
	</script>
</body>
</html>