<?php
	include 'config.php';

	$id=$_GET['update_id'];
	$result=mysqli_query($conn,"SELECT * FROM `user` WHERE id=$id");
	$row=mysqli_fetch_assoc($result);
	$name = $row['name'];
	$email = $row['email'];
	$mobile = $row['Mobile'];
	$password = $row['password'];

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
	
		mysqli_query($conn,"UPDATE `user` SET `id`='$id',`name`='$name',`email`='$email',`Mobile`='$mobile',`password`='$password' WHERE id=$id");
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update User</title>
</head>
<body>
		<div class="container"></div>
		<form method="POST" action="">
		<h2>Update User</h2>

		<label>Name</label><br>
		<input type="text" name="name" id="name"  placeholder="Enter Your Name" value=<?php echo $name?>><br><br>

		<label>Email</label><br>
		<input type="text" name="email" id="email"  placeholder="Enter Your Email" value=<?php echo $email?>><br><br>

		<label>Mobile No.</label><br>
		<input type="text" name="mobile" id="mobile"  placeholder="Enter Your Mobile No." value=<?php echo $mobile?>><br><br>

		<label>Password</label><br>
		<input type="password" name="password" id="password"  placeholder="Enter Your Passwod" value=<?php echo $password?>><br><br>

		<button type="submit" name="submit">Update</button>
		</form>
</body>
</html>