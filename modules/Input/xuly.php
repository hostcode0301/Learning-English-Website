<?php
    //khoi dong bo nho session
	session_start();
	$voc = $_POST["voc"];
	$speak = $_POST["speak"];
    $mean = $_POST["mean"];
    $unit = $_POST["unit"];
	// ket noi databse
	include("../Xuly/config.php");
	// bat dau xu ly
	$red = mysql_query('SELECT * FROM vocunit WHERE voc="'.$voc.'"');
	$row = mysql_num_rows($red);
	if ($row==0) {
        mysql_query("INSERT INTO vocunit VALUES('','".$_POST['voc']."','".$_POST['speak']."','".$_POST['mean']."','".$_POST['unit']."')");
		$_SESSION["inputstatus"] = 'connect';
		header("location: ../../index.php?xem=nhap&unit=0");
	} else {
		$_SESSION["voc"] = $voc;
		$_SESSION["speak"] = $speak;
        $_SESSION["mean"] = $mean;
		$_SESSION["inputstatus"] = 'fail';
		header("location: ../../index.php?xem=nhap&unit=0");
	}
?>