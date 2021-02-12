<?php
	include_once 'View/header.php';  
?>
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
					<input type="Password" name="phone_number">
				</div>
				<div class="reg2-wrapper">
					<div class="reg-label">Date Of Birth</div>
					<input type="date" name="dob">
				</div>
			</div>

			<div class="reg-content">
				<div class="reg1-wrapper">
					<div class="reg-label">Password</div>
					<input type="Password" name="first_name">
				</div>
				<div class="reg2-wrapper">
					<div class="reg-label">Confirm Password</div>
					<input type="Password" name="last_name">
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