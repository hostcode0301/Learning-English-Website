<?php
	include("../Xuly/config.php");
echo($_POST["tenfile"]);
	if ($_FILES["userfile"]["error"]>0) {
		header("location: ../../index.php?xem=upload&unit=0&error=1");
	}
	else if ($_POST["tenfile"]==NULL or $_POST["mota"]==NULL) {
		header("location: ../../index.php?xem=upload&unit=0$&error=1");
	}
else {
mysqli_query($con,"INSERT INTO file VALUES('','".$_POST["tenfile"]."','".$_POST["mota"]."','".$_POST["pq"]."')");
move_uploaded_file($_FILES["userfile"]["tmp_name"],"data/".$_FILES["userfile"]["name"]);
header("location: ../../index.php?xem=upload&unit=0&error=0");
}
?>