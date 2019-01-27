<?php
    //khoi dong bo nho session
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$fullname = $_POST["fullname"];
	$nickname = $_POST["nickname"];
    $email = $_POST["email"];
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	$_SESSION["fullname"] = $fullname;
	$_SESSION["nickname"] = $nickname;
    $_SESSION["email"] = $email;
	// ket noi databse
	include("../Xuly/config.php");
	// bat dau xu ly
	$red = mysqli_query($con,'SELECT * FROM login WHERE username="'.$username.'"');
	$sql = "INSERT INTO login VALUES('','".$_POST['username']."','".$_POST['password']."','".$_POST['fullname']."','".$_POST['nickname']."','".$_POST['email']."','0')";
	$row = mysqli_num_rows($red);
	if ($row==0) {
        mysqli_query($con,$sql);
		$_SESSION["regisstatus"] = 'register connect';
		header("location: ../../index.php?xem=login");
	} else {
		$_SESSION["regisstatus"] = 'register fail';
		header("location: ../../index.php?xem=register");
	}
?>