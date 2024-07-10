<?php
	
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$role=$_POST['role'];

	//Database connection
	$conn=mysqli_connect('localhost','root','','farmland');
	if($conn->connect_error){
		die('Connection failed:'.$conn->connect_error);
	}
	else
	{
		$sql="INSERT INTO agro VALUES('$role','$name','$password','$email','$phno')";
		mysqli_query($conn,$sql);
		$conn->close();


		header("Location:login_form.php");
				        exit();
	}
?>