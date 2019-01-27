<div id="content-right">
    <div id="login">
<form action="modules/Register/xuly.php" method="post">
	<table width="400">
  <tr>
    <td height="50" colspan="2"><h2 align="center">Register To Wedside</h2></td>
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
    <td height="45">Fullname</td>
    <td><label for="fullname"></label>
      <input type="text" name="fullname" id="fullname" value="<?php
        if (isset($_SESSION['fullname'])) {
			echo $_SESSION['fullname'];
		}
    ?>" /></td>
  </tr>
  <tr>
    <td height="45">Nickname:</td>
    <td height="45"><label for="nickname"></label>
    <input type="text" name="nickname" id="nickname" value="<?php
        if (isset($_SESSION['nickname'])) {
			echo $_SESSION['nickname'];
		}
    ?>" /></td>
    </tr>
  <tr>
    <td height="45">Email:</td>
    <td height="45"><label for="email"></label>
    <input name="email" type="text" id="email" value="<?php
        if (isset($_SESSION['email'])) {
			echo $_SESSION['email'];
		}
    ?>" /></td>
  </tr>
  <tr>
    <td height="45"><input type="submit" name="submit" id="submit" value="     Register     " /></td>
    <td height="45"><?php
        if (isset($_SESSION["regisstatus"])) {
			echo $_SESSION["regisstatus"];
		}
	?></td>
  </tr>
    </table>
</form>
</div>
</div>