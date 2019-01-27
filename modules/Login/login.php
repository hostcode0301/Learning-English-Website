<div id="login">
<form action="modules/login/xuly.php" method="post">
	<table width="400">
  <tr>
    <td height="50" colspan="2"><h2 align="center">Login To Wedside</h2></td>
    </tr>
  <tr>
    <td width="150" height="45">Username:</td>
    <td width="250"><label for="username"></label>
	<input name="username" type="text" id="username" value="<?php
        if (isset($_SESSION['username'])) {
			echo $_SESSION['username'];
		}
    ?>">   
  </td>
  </tr>
  <tr>
    <td height="45">Password:</td>
    <td><label for="password"></label>
	<input name="password" type="password" id="password" value="<?php
        if (isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
    ?>">	
  </td>
  </tr>
  <tr>
    <td height="45"><div align="center">
      <input type="submit" name="submit" id="submit" value="     Login     ">
    </div></td>
    <td height="45">
    <?php
        if (isset($_SESSION["loginstatus"])) {
			echo $_SESSION["loginstatus"];
		}
		if (isset($_SESSION["regisstatus"])) {
			echo $_SESSION["regisstatus"];
		}
	?>
    </td>
    </tr>
    </table>
</form>
</div>