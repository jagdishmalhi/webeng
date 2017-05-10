<?php
include("connect.php");

	// Inialize session
	session_start();
	$username=$_REQUEST["username"];
	$userpassword=$_REQUEST["userpassword"];
	// Retrieve username and password from database according to user's input
	$query=mysqli_query($conn,"SELECT * FROM `user` where `uName`='$username' && `uPassword`='$userpassword'");
	//$ac=mysqli_query($conn,"SELECT * FROM `user` where `type`='Adminstrator'");
	//$acrow=mysqli_num_rows($ac);
	//$utype;
	$row = mysqli_num_rows($query);
	if ($row == 1) {
		
		//if ($_SESSION['utype']=='Adminstrator') {
			$_SESSION["username"]=$username;
			header("Location:index.php");
		//}
		//elseif($_SESSION['utype']=='Member'){
			//$_SESSION["username"]=$username;
			//header("Location:index.php");
		//}
	}
	else{
		header("Location:my-account.php");
	}
	
	// Check username and password match
	// if ($row==1) {
	// 	echo "string";
	// 	if (mysqli_num_rows($query) == "Adminstrator") {
	// 		echo "string1";
	// 		// $_SESSION['sess_user_id'] = $row['id'];
	// 		// $_SESSION['sess_username'] = $row['username'];
	// 		// $_SESSION['username'] = $_POST['username'];

	// 		// if (mysqli_num_rows(`uId`) == '10') {
	// 			$_SESSION["username"]=$username;
	// 			header("Location:admin/index.php?msg=Welcome Admin");
	// 	}
	// 	else if(mysqli_num_rows($query) == "Member"){
	// 		echo "2";
	// 		$_SESSION["username"]=$username;
	// 		header("Location:index.php?msg=Welcome");	
	// 	}	
	// }
	// else{
	// 	header("Location:my-account.php?msg=Please fill carefully!");
	// }

	// if (mysql_num_rows($login) == 'user') {
	// 	// Set username session variable
	// 	$_SESSION['username'] = $_POST['username'];
	// 	// Jump to secured page
	// 	header('Location:user.php');
	// }
	// else {
	// 	// Jump to login page
	// 	header('Location: ind.php');
	// }

///////////////////////////////////////////////////////////////
// session_start();

// $query=mysqli_query($conn,"SELECT * FROM `user` ");
// while($row=mysqli_fetch_array($query))
// {
// 	if($username==$row["uName"] && $userpassword==$row["uPassword"])
// 	{
// 		$_SESSION["username"]=$username;
// 		header("location:index.php");
// 	}
// 	else
// 	{
// 		header("location:my-account.php?msg=notloggedin");
// 	}
// }
?>