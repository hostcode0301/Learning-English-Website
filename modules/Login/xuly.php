<?php
    //khoi dong bo nho session
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	// ket noi databse
	include("../Xuly/config.php");
	// bat dau xu ly
	$red = mysqli_query($con,'SELECT * FROM login WHERE username="'.$username.'" AND password="'.$password.'"');
	$row = mysqli_num_rows($red);
	if ($row>0) {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$_SESSION["loginstatus"] = 'login connect';
		header("location: ../../index.php");
	} else {
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$_SESSION["loginstatus"] = 'login fail';
		header("location: ../../index.php?xem=login&unit=0");
	}
?>