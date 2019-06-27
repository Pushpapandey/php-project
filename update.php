<?php

include 'conn.php';

if(isset($_POST['done'])){

	$id = $_GET['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$gender = $_POST['gender'];
	$date = $_POST['mdy'];
	$q = "  update fbooktable set id=$id, fname='$fname', lname='$lname',email='$email', pass='$pass', gender='$gender', date='$date' where id=$id ";

	$query = mysqli_query($con,$q);

	header('location:display.php');


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="ball.css">

  <div class="container">
		<div class="row">

			<div class="col-lg-6">
				<div class="container">
				<h2>Connect with friends and the world around you on Facebook.</h2><br><br><br>
				<p><i class="fas fa-newspaper"> See photos and updates from friends in News feed</i></p>
				<p><i class="fas fa-tv"> Share what's new in your life on your Timeline </i></p>
				<p><i class="fab fa-acquisitions-incorporated"> Find more of what you're looking for with facebook search</i></p>
				</div>
			</div>

			<div class="col-lg-6">
				<h1>Sign Up</h1> 
				<form method="post">
					<div class="form-group">
						<label>It's free and always will be.</label><br>
						<p>
					

						</p>
							
							  <div class="row">
							    <div class="col">
							    	<span id="error-firstname"></span>
							      <input type="text" class="form-control" placeholder="First name" name="fname" id="firstname">
							    </div>
							    <div class="col">
							    	<span id="error-lastname"></span>
							      <input type="text" class="form-control" placeholder="Last name" name="lname" id="lastname">
							    </div>
							  </div><br>
							<span id="error-email"></span>
						    <input type="text" class="form-control" placeholder="Email" name="email" id="email"><br>

						    <span id="error-password"></span>
						    <input type="password" class="form-control" placeholder="New password" name="pass" id="password"><br>
						    <div class="form-inline">
						    	<span id="error-gender"></span>
						    	<div class="row">
						    		<div class="col">
								    <div class="form-check">
		  								<label class="form-check-inline">
		   				 				<input type="radio" class="form-check-input" name="gender" value="female" id="gender">Female
		 								 </label>
		 							</div>
									</div>
									<div class="col">
									<div class="form-check">
		  								<label class="form-check-inline">
		    							<input type="radio" class="form-check-input" name="gender"  value="male" id="gender">Male
		  								</label>
									</div>
									</div>
									<div class="col">
									<div class="form-check">
		  								<label class="form-check-inline">
		    							<input type="radio" class="form-check-input" name="gender"  value="other" id="gender">custom
		  								</label>
									</div>
								 	</div>
								</div>
							</div>		
					</div>

						<span id="error-date"></span>
					    <label>Birthday</label>
					    <input type="date" class="form-control" placeholder="Date of Birth" name="mdy" id="date">
					<br>
					<p>By clicking Sign Up, you agree to out Terms, Data Policy and Cookies policy. You may receive SMS Notifications from us and can opt out any time.</p>
					<button type="submit" value="submit" class="btn btn-success" name="done">signup</button>
				</form>

			</div>
		</div>
	</div>


</body>
</html>