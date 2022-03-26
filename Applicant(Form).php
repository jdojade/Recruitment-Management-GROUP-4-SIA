<?php 
include "includes/applicantform.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to octagon</title>
	<link rel="stylesheet" type="text/css" href="css/FormStyle.css">
	<link rel="icon" type="image/jpg" href="images/octagon.png">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
	<div class="form">
		<div class="top-title">
            <img src="Images/octagon.png">
            <h1>Welcome!</h1>
        </div>
		<div class="title-div">
			
			<h1>Start your career with us!</h1>
			<p class="required">*Required</p>
		</div>

		<div class="container">
			<div class="name">Email<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="email" placeholder="Your answer" required></div>
		</div>

		<div class="container">
			<div class="name">First Name<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="fname" placeholder="Your answer" required></div>
		</div>

		<div class="container">
			<div class="name">Middle Name<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="mname" placeholder="Your answer" required></div>
		</div>
		<div class="container">
			<div class="name">Last Name<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="lname" placeholder="Your answer" required></div>
		</div>
		<div class="container">
			<div class="name">Birthday<span class="required">*</span></div>
			<div class="input-div"><input type="date"  name="bday" required></div>
		</div>
		<div class="container">
			<div class="name">Gender<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="gender" placeholder="Your answer" required></div>
		</div>
		<div class="container">
			<div class="name">Address<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="address" placeholder="Your answer" class="con-address" required></div>
		</div>
		<!-- contanct number need -->
		<div class="container">
			<div class="name">Contact Number<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="contact" placeholder="Your answer" required></div>
		</div>
		<div class="container">
			<div class="name">Position<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="position" placeholder="Your answer" required></div>
		</div>
		<div class="container">
			<div class="name">Department<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="department" placeholder="Your answer" required></div>
		</div>
		<div class="container">
			<div class="name">Branch<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="branch" placeholder="Your answer" required></div>
		</div>
		<div class="container-radio">
			<label for="radioId" >
              <input type="radio" name="radioId" id="radioId" required>
			  <span>I agree to the terms and conditions..</span>
			  <span><a href="DataPrivacy.php">View more</a></span>
        	</label>
		</div>
		<div class="buttons">
            <div>
			<input class="btn" type="submit" name="applicantForm">
            </div>
            <div>
			<input class="btn" type="reset" value="Clear form">
            </div>
		</div>
	</div>
</form>
</body>
</html>