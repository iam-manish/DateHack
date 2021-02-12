<?php
	include_once 'View/header.php';  
	$db = new Model\Database();
	if (isset($_POST['accept'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['user_email'];
		$date_of_birth	 = $_POST['dob'];
		$phone_number = $_POST['phone_number'];
		$user_name = $_POST['user_name'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$gender = $_POST['exampleRadios'];
		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($date_of_birth) && !empty($phone_number) && !empty($user_name) && !empty($password) && !empty($gender)){
			$data = [
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'email'=>$email,
				'date_of_birth'=>$date_of_birth,
				'phone_number'=>$phone_number,
				'user_name'=>$user_name,
				'password'=>$password,
				'gender'=>$gender,
			];
			try {
				if($db->insert($data,"user")=="ok"){
					echo "<script>alert('User successfully registred.please login');</script>";
				}
				else{
					echo "<script>alert('Something went wrong.Please try again');</script>";
				}
			} catch (Exception $e) {
				echo "<script>alert('User already exits.');</script>";
			}
			
		}
		else{
			echo "<script>alert('All Field is required');</script>";
		}
	}
?>
<style type="text/css">
	footer{
		top: 75px;
	}
</style>
<div class="registration-page">
 	<div class="img-reg reg-image img1"><img src="<?= base_url?>images/image1.png" alt="Person Image One"></div>
 	<div class="img-reg reg-image img2"><img src="<?= base_url?>images/image2.png" alt="Person Image One"></div>
 	<div class="img-reg reg-image img3"><img src="<?= base_url?>images/image3.png" alt="Person Image One"></div>
 	<div class="img-reg reg-image img4"><img src="<?= base_url?>images/image4.png" alt="Person Image One"></div>
	<div id="registration-frm">
		<div class="reg-text">
			<h4>Get Strated </h4>
			<p>Sign up to get started finding your partner!</p>
		</div>
		<form method="post" action="register.php">
			<div class="reg-content">
				<div class="reg1-wrapper">
					<div class="reg-label">First Name</div>
					<input type="text" name="first_name">
				</div>
				<div class="reg2-wrapper">
					<div class="reg-label">Last Name</div>
					<input type="text" name="last_name">
				</div>
			</div>

			<div class="reg-content">
				<div class="reg1-wrapper">
					<div class="reg-label">User Name</div>
					<input type="text" name="user_name">
				</div>
				<div class="reg2-wrapper">
					<div class="reg-label">Email</div>
					<input type="text" name="user_email">
				</div>
			</div>

			<div class="reg-content">
				<div class="reg1-wrapper">
					<div class="reg-label">Phone</div>
					<input type="text" name="phone_number">
				</div>
				<div class="reg2-wrapper">
					<div class="reg-label">Date Of Birth</div>
					<input type="date" name="dob">
				</div>
			</div>

			<div class="reg-content">
				<div class="reg1-wrapper">
					<div class="reg-label">Password</div>
					<input type="Password" name="password">
				</div>
				<div class="reg2-wrapper">
					<div class="reg-label">Gender</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Male" checked>
						<label class="form-check-label reg-label" for="exampleRadios1">Male</label>
					</div>

					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Fmale">
					  <label class="form-check-label reg-label" for="exampleRadios1">
					    Fmale
					  </label>
					</div>

					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Others">
					  <label class="form-check-label reg-label" for="exampleRadios1">
					    Others
					  </label>
					</div>
				</div>
			</div>

			<div class="reg2-wrapper">
				<div class="reg-terms">
					<input type="checkbox" name="accept">
					<p>By Creating your account you agree to our <br>Teams Of Use & Privacy Policy</p>
				</div>
			</div>
			<input type="submit" name="submit" value="Register ->">
		</form>
	</div>
</div>
<?php include_once 'View/footer.php'; ?>