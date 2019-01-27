<div id="welcome">
<?php
	$xem='';
	if (isset($_GET["xem"])) {
			$xem=$_GET["xem"];
		}
	if ($xem=="login") {
			include("modules/Login/login.php");
		}
	if ($xem=="register") {
			include("modules/Register/input.php");
		}
	else {
?>
	<h1>Welcome to our website</h1>
    <h3>Together, I and you create your future</h3>
<?php
	}
?>
</div>