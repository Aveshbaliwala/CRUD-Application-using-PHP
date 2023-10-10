<?php
	include 'config.php';
?>
<?php
	$result=mysqli_query($conn,"SELECT * FROM `user`");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Application</title>
	<style type="text/css">
		.btn_container
		{
			margin-top: 30px;
			width: 50%;
			height: 40px;
		}
		.btn_container .add_btn
		{
			width: 30%;
			height: 40px;
			font-family: poppins;
			background-color: black;
			color: white;
			font-size: 18px;
			border-radius: 20px;
		}
		.btn_container .add_btn a
		{
			color: white;
		}
		.user_tbl
		{
			font-family: poppins;
			margin-top: 20px;
			width: 80%;
		}
		.user_tbl thead
		{
			background-color: black;
			color: white;
			text-align: center;
		}
		.user_tbl tbody
		{
			text-align: left;
		}
		.user_tbl .up_btn
		{
			font-size: 16px;
			background-color: white;
			border-radius: 20px;
		}
		.user_tbl .del_btn
		{
			font-size: 16px;
			background-color: white;
			border-radius: 20px;
			margin-left: -60px;
		}
		.user_tbl .up_btn:hover
		{
			background-color: green;
		}
		.user_tbl .up_btn a:hover
		{
			color: white;
		}
		.user_tbl .del_btn:hover
		{
			background-color: red;
		}
		.user_tbl .del_btn a:hover
		{
			color: white;
		}
	</style>
</head>
<body>
	<h2 style="text-align: center;font-family: poppins;font-size: 30px;">CRUD Application</h2>
	<div class="btn_container">
		<button type ="submit" name="submit" class="add_btn"><a href="user.php">Add User</a></button>
	</div>
		<table class="user_tbl">
			<thead>
				<tr>
					<td>User Id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Mobile No.</td>
					<td>Password</td>
					<td class="action">Actions</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=1;
				while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $i?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['Mobile'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><button class="up_btn">
						<a href="update.php?update_id=<?php echo $row['id'];?>">Update</button>
					</td>
					<td><button class="del_btn">
						<a href="delete.php?del_task=<?php echo $row['id'];?>">Delete</button>
					</td>
				</tr>
				<?php
				$i++;
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>