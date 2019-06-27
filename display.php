<?php

include'conn.php';



	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$gender = $_POST['gender'];
	$date = $_POST['mdy'];
	$q = "select * from fbooktable";

	$query = mysqli_query($con,$q);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="col-lg-12"><br>
		<br>

		<h1 class="text-warning text-center"> Display Table Data </h1><br>

		<table class="table table-striped table-hover table-bordered">

			<tr class="bg-dark text-white text-center">
			
				<th>Id</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
				<th>Pass</th>
				<th>Gender</th>
				<th>Date</th>
				<th>Delete</th>
				<th>Update</th>

			</tr>

			<?php

					include'conn.php';

					$q = "select * from fbooktable";

					$query = mysqli_query($con,$q);

					while($res = mysqli_fetch_array($query)){

			?>

			<tr>

 				<th><?php echo $res['id']; ?></th>
				<td><?php echo $res['fname']; ?></td>
				<td><?php echo $res['lname']; ?></td>
				<td><?php echo $res['email']; ?></td>
				<td><?php echo $res['pass']; ?></td>
				<td><?php echo $res['gender']; ?></td>
				<td><?php echo $res['date']; ?></td>
				<td><button class="btn-danger btn"> <a href="del.php?id= <?php echo $res['id']; ?>" class="text-white"> Delete </a> </button></td>
				<td><button class="btn-primary btn"> <a href="update.php?id= <?php echo $res['id']; ?>" class="text-white"> Update </a> </button></td>

			</tr>

		<?php
			}
		?>


		</table>
	</div>
</div>





</body>
</html>