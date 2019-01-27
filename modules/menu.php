<div id="banner-top">
</div>
<script type="text/javascript">
    function confirmLogout() {
        if (confirm("Ban co chac muon thoat khong?")) {
            //co nghia la nguoi dung bam ok
            return true;
        }
        return false;
    }
    function login() {
        alert("Hello!");
    }
</script>
<div id="menu">
  <ul>
  		<a href="index.php">
        	<li>Home</li>
        </a>
        <a href="index.php?xem=contest">
        	<li>Contest</li>
        </a>
        <a href="index.php?xem=irre">
        	<li>Irregular Verbs</li>
        </a>
        <a href="index.php?xem=relax">
        	<li>Relax</li>
        </a>
        <a href="index.php?xem=upload">
        	<li>Upload</li>
        </a>
        <a href="index.php?xem=down">
        	<li>Download</li>
        </a>
        <a href="index.php">
        	<li>Forum</li>
        </a>
<?php
    $kt='';
	if (isset($_SESSION["loginstatus"])) {
		$kt = $_SESSION["loginstatus"];
	}
	if (isset($_SESSION["username"])) {
		$user = $_SESSION["username"];
	}
	if ($kt=='login connect') {
?>
        <li>
        	<?php
				$sql = mysqli_query($con,"SELECT * FROM login WHERE username='$user'");
	 			while ($value = mysqli_fetch_array($sql)) { 
					echo $value["nickname"]; 
				}
			?>
            <ul id="submenu">
            	<a href="index.php?xem=information">
            		<li>Infomation</li>
                </a>
            <?php 
				$red = mysqli_query($con,'SELECT * FROM login WHERE Role="1"');
				$row = mysqli_num_rows($red);
				if ($row==1) {
			?>
                <a href="index.php?xem=nhap">
                	<li>Input Vocabulary</li>
                </a>
            <?php } ?>
                <a href="modules/login/logout.php" onclick="return confirmLogout();"/>
            		<li>Logout</li>
                <a>
            </ul>
        </li>
<?php
	} 
	else {
?>
		<a href="index.php?xem=login">
        	<li>Login</li>
        </a>
<?php
     }
?>
		<a href="index.php?xem=register">
        	<li>Register</li>
        </a>
    </ul>
</div>