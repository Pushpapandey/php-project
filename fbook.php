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
</head>
<body>


	<header class="btn-primary active text-warning text-center py-4 mb-4">
		<div class="row">
			<div class="col-md-6 text-white">
				<h2>Facebook</h2>
			</div>
			<div class="col-md-6">
				<form class="form-inline">
					<div class="form-group col-md-4">
		    		<label for="inputEmail4">Email or phone</label>
		   			<input type="email" class="form-control" id="email" name="email">
		   			</div>
		   			<div class="form-group col-md-4">
		    		<label for="pwd">Password:</label>
		    		<input type="password" class="form-control" id="pwd" name="pswd">
		    		</div>
		    		<div class="col-md-4">
		    		<button type="submit" class="btn btn-primary">Login</button>
		    		</div>
		  		</form>
		  	</div>
		</div>  
			<div class="row">
					<div class="col-md-7">
					</div>
					<div class="col-md-5 sun">
					<h5><a href="#" class="text-white"> forgot account?</a></h5> 
					</div>
			</div> 
	</header>

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

				<form action="reg.php" method="post">
					<div class="form-group">
						<label>It's free and always will be.</label><br>
						<form class="form-inline">
						    <form>
							  <div class="row">
							    <div class="col">
							      <input type="text" class="form-control" placeholder="First name">
							    </div>
							    <div class="col">
							      <input type="text" class="form-control" placeholder="Last name">
							    </div>
							  </div>
							</form><br>
						    <input type="email" class="form-control" placeholder="Mobile number or email" name="email"><br>
						    <input type="password" class="form-control" placeholder="New password" name="pass"><br>
						    <div class="form-inline">
						    	<div class="row">
						    		<div class="col">
								    <div class="form-check">
		  								<label class="form-check-inline">
		   				 				<input type="radio" class="form-check-input" name="optradio">Female
		 								 </label>
		 							</div>
									</div>
									<div class="col">
									<div class="form-check">
		  								<label class="form-check-inline">
		    							<input type="radio" class="form-check-input" name="optradio">Male
		  								</label>
									</div>
									</div>
									<div class="col">
									<div class="form-check">
		  								<label class="form-check-inline">
		    							<input type="radio" class="form-check-input" name="optradio">custom
		  								</label>
									</div>
								 	</div>
								</div>
							</div>		
					</div>

					<form class="form-inline" action="/action_page.php">
					    <label>Birthday</label>
					    <input type="date" class="form-control" placeholder="Date of Birth" name="date">
					</form><br>
					<p>By clicking Sign Up, you agree to out Terms, Data Policy and Cookies policy. You may receive SMS Notifications from us and can opt out any time.</p>
					<button type="submit" class="btn btn-success">Sign up</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>
