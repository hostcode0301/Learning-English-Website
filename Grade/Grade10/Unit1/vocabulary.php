<div id="content-unit">
<h2>VOCABULARY</h2>
<table width="700" border="2">
  <tr>
    <td width="150"><div align="center"><strong>Từ</strong></div></td>
    <td width="150"><div align="center"><strong>Cách phát âm</strong></div></td>
    <td width="200"><div align="center"><strong>Nghĩa của từ</strong></div></td>
    <td width="200"><div align="center"><strong>Nghĩa tiếng Anh</strong></div></td>
  </tr>
<?php    
	 $sql = mysql_query("SELECT * FROM vocunit WHERE unit='1'");
	 while ($value = mysql_fetch_array($sql)) {
?>
  <tr>
    <td><?php echo $value["voc"]; ?></td>
    <td><?php echo $value["speak"] ?></td>
    <td><?php echo $value["mean"] ?></td>
    <td><?php echo $value["mean-eng"] ?></td>
  </tr>
<?php
	 }
?>
</table>
</div>