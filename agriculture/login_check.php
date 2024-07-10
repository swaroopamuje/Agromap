<?php
	session_start();
	// include "login_form.php";

	if(isset($_POST['submit']))
	{

		// function valid($data)
		// {
		// 	$data =trim($data);
		// 	$data =stripslashes($data);
		// 	$data =htmlspecialchars($data);
		// 	return data;
		// }

		$username = $_POST['name'];
        $password = $_POST['password'];
        $role = $_POST['role'];

		$conn = mysqli_connect("localhost","root","","farmland"); 

		$sql = "SELECT username,password,role FROM agro WHERE username = '$username' AND password = '$password' AND role = '$role' ";
		$result = mysqli_query($conn,$sql);

     	if(empty($username))
        {
        	header("Location:login_form.php?error = Username required");
        }
        if(empty($password))
        {
        	header("Location:login_form.php?error = Password required");
        }

	 
		if (mysqli_num_rows($result) ==1)
	 	{	
	    $row = mysqli_fetch_assoc($result);
		    if($row['username']=== $username && $row['password']=== $password && $row['role'] === $role)
		    {
		    	echo "Logged in";
		    	$_SESSION['username']= $row['username'];
		    	$_SESSION['password']= $row['password'];
		    	$_SESSION['role'] = $row['role'];
		    	
				    $roleid =  $row['role'];

				    if($_SESSION['role']=="farmer")
				    {
				        header("Location:farmerhome.php");
				        exit();
				    }
				    //
				    elseif (($_SESSION['role']=="customer")) 
				    { 
				        header("Location:customerhome.php");
				        exit();
				    }
				
		    	
		    	header("Location: home.php");
		    	exit();
		    }
		}
		else {
		    echo "error";
		    header("Location:login_form.php?error=Incorrect Username or password");
		    exit();
		}

	}
	else{
	    header("Location:login_form.php?");
	    exit();
	}

?>