<?php
include_once 'autoLoader.php';  
	define('pageLoad',true);  
	$db = new Model\Database();
	$login = new controller\Home($db);
	include_once 'config.php';

	if(isset($_POST['submit'])){
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		if($login->userLogin($user_email, $user_password)==="empty"){
			echo "<script>alert('Both email and password is required.');</script>";
		}
		else{
			try {
				if($login->userLogin($user_email, $user_password)==="passError"){
					echo "<script>alert('Incorrect Username and password');</script>";
				}
			} catch (Exception $e) {
				echo "<script>alert('No User Found. Please register');</script>";
			}
			
		}

	}
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
  	<meta name="google-signin-client_id" content="419839512907-42og4jplpsj1vkuj69i5e3ib80hp3l50.apps.googleusercontent.com">
	<!-- end of meta tags -->

	<!-- links -->
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/css/style.css">
	<!-- end links  -->
	<style type="text/css">
		body{
			overflow-x: hidden;
		}
	</style>
</head>
<body>
	<div id="login-page">
		<div class="login-image"><a href="index.php"><img src="<?= base_url?>/images/app/logo.png" alt="Datemandu Logo"></a></div>
		<div class="login-frm">
			
				<div class="card">
					<form method="POST" action="login.php">
	  					<div class="container">
	  						<!-- Form Content-->
	  						<div class="form-group">
	    						<label for="exampleInputEmail1">Email address</label>
	    						<input name="user_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  						</div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input name="user_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>

	  						<!-- Form Content End -->
	  						<button type="submit" name="submit" class="btn btn-primary">Submit</button>

	  					</div>
  					</form>
  					<div class="pass-reset"><a href="#">Forget Password</a></div>
  					<div class="create-acc">
  						<button type="button" class="btn btn-success"><a href="register.php">Create Account</a></button>
  					</div>
				</div>
			
		</div>
	</div>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>

<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
  <div class="container">
   <br />
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
   	$_SESSION['userDetails']['first_name'] = $_SESSION['user_first_name'];
   	$_SESSION['userDetails']['last_name'] = $_SESSION['user_last_name'];
   	$_SESSION['userDetails']['profile'] = $_SESSION["user_image"];
   	$_SESSION['userDetails']['email'] = $_SESSION['user_email_address'];
   	$_SESSION['userDetails']['gender'] = "M";
   	$_SESSION['google_login'] = true;
   	header("location:ultra/index.php");
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center" class="google-login">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>
