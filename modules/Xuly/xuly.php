<?php
	include("config.php");
	$trl = $_POST["trl"];
	$hoi = $_GET['hoi'];
	$red = mysql_query('SELECT * FROM voc WHERE voc="'.$trl.'",STT="'.$hoi.'"');
	$red1 = mysql_query('SELECT * FROM voc WHERE STT="'.$hoi.'"');
	$value=mysql_fetch_array($red1);
	$row = mysql_num_rows($red);
	$kt = 'false';
	if ($trl==NULL) {
		$kt = 'false';
	}
	if ($row>0) {
		$dapan = $trl;
		$kt = 'true';
	} else {
		$dapan = $value['voc'];
		$kt = 'false';	
	}
	if ($kt=='false') {
		header("location: ../../index.php?xem=test&unit=1&trl=$trl&dapan=$dapan");
	} 
	if ($kt=='true'){
		header("location: ../../index.php?xem=test&unit=1&trl=$trl");
	}
?>