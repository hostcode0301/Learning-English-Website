<div id="content-right">
<h2>VOCABULARY</h2>
<table width="700" border="2" style="margin-left: 50px;">
  <tr>
    <td width="200"><div align="center"><strong>Từ</strong></div></td>
    <td width="200"><div align="center"><strong>Cách phát âm</strong></div></td>
    <td width="300"><div align="center"><strong>Nghĩa của từ</strong></div></td>
  </tr>
<?php    
	 $sql = mysql_query("SELECT * FROM vocunit WHERE unit='2'");
	 while ($value = mysql_fetch_array($sql)) {
?>
  <tr>
    <td><?php echo $value["voc"]; ?></td>
    <td><?php echo $value["speak"] ?></td>
    <td><?php echo $value["mean"] ?></td>
  </tr>
<?php
	 }
?>
</table>
</div>