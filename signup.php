<?php 
include("connect.php");

		$username = $_POST["username"];
		$useremail = $_POST["email"];
		//$userpassword = $_POST["password1"];
		$userpassword = $_POST["cpassword"];

		
		$query=mysqli_query($conn,"Insert into `user`(`uName`, `uEmail`, `uPassword`) Values('$username','$useremail','$userpassword')");

		if($query != "")
		{
			$_SESSION["username"]=$username;
			header("location:index.php?msg=Welcome $username");			
		}	
		else
		{		
			header("location:registration.php?warn_msg=please fill carefully");			
		}
	
?>