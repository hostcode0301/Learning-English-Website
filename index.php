<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learning English Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
    session_start();
	include("modules/Xuly/config.php");
	include("modules/menu.php");
	$_SESSION["username"] = "";
	$_SESSION["password"] = "";
	$_SESSION["fullname"] = "";
	$_SESSION["nickname"] = "";
    $_SESSION["email"] = "";
?>
<div id="wrapper">
<?php
	include("modules/adver/adver-left.php");
	include("modules/adver/adver-right.php");
	include("modules/Banner/banner.php");
	include("modules/Content/content.php");
	include("modules/clear.php");
?>
</div>
<?php
	include("modules/footer.php");
?>
</body>
</html>