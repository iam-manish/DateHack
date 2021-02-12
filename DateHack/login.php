<?php
include_once 'autoLoader.php';  
	define('pageLoad',true);  
	$db = new Model\Database();
	$login = new controller\Home($db);

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
	<!-- end of meta tags -->

	<!-- links -->
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url?>assets/css/style.css">
	<!-- end links  -->
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
</body>
</html>