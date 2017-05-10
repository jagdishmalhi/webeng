<?php 
	$conn = mysqli_connect("localhost", "root", "") or die(mysqli_error());
	$dbconn = mysqli_select_db($conn,"cake") or die(mysqli_error());
	if (!$dbconn) {
		echo "connecting error".mysql_error();
	}
	
?>