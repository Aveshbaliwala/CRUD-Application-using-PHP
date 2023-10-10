<?php
	include "config.php"; 
	//Deleting Records
	if(isset($_GET['del_task']))
	{
		$id=$_GET['del_task'];
		mysqli_query($conn,"DELETE FROM `user` WHERE id=$id");
		header("location:index.php");
	}
?>