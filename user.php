<?php
	include 'config.php';
?>
<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
	
		mysqli_query($conn,"INSERT INTO `user`(`name`, `email`,`mobile`,`password`) VALUES ('$name','$email','$mobile','$password')");
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Page</title>
	<style type="text/css">
		
		body
		{
			background-color: darkgray;
		}

		.container
		{	
			background-color: lightgray;
			height: 500px;
			width: 40%;
			border: 2px solid black;
			border-radius: 10px;
			padding: 20px;
			font-family: poppins;
			font-size: 18px;
		}
		.container input
		{
			width: 50%;
			font-size: 16px;
			font-family: poppins;
		}
		.container button
		{
			width: 30%;
			height: 40px;
			font-family: poppins;
			background-color: black;
			color: white;
			font-size: 18px;
			border-radius: 20px;
		}
	</style>
</head>
<body>
		<div class="container">
		<form method="POST" action="">
		<h2 style="text-align: center;">Users</h2>

		<label>Name</label><br>
		<input type="text" name="name" id="name"  placeholder="Enter Your Name" required><br><br>

		<label>Email</label><br>
		<input type="text" name="email" id="email"  placeholder="Enter Your Email" required><br><br>

		<label>Mobile No.</label><br>
		<input type="text" name="mobile" id="mobile"  placeholder="Enter Your Mobile No." required><br><br>

		<label>Password</label><br>
		<input type="password" name="password" id="password"  placeholder="Enter Your Passwod" required><br><br>

		<button type="submit" name="submit">Add User</button>
		</form>
	</div>
</body>
</html>