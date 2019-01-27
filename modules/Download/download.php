<div id="verb">
<?php
	$sql=mysqli_query($con,"SELECT * FROM file");//ket noi vao bang trong co so du lieu
?>
	<table width="750" border="2">
  <tr>
    <td colspan="3"><h3 align="center">Download file</h3></td>
    </tr>
  <tr>
    <td width="250"><strong>Tên file</strong></td>
    <td width="250"><strong>Mô tả</strong></td>
    <td width="250"><strong>Download</strong></td>
  </tr>
<?php
	//bat dau vong lap dua ra 
  while ($value=mysqli_fetch_array($sql)){
?>
  <tr>
    <td><?php echo $value["tenfile"] ?></td>
    <td><?php echo $value["mota"] ?></td>
    <td>
        <?php if (isset($_SESSION['loginstatus'])) { ?>
        	<a href="modules/Download/xuly.php?filename=<?php echo $value["tenfile"] ?>">Here</a>
        <?php } else 
            {
                echo "Hãy là thành viên để thấy được liên kết";
            }
        ?>
    </td>
  </tr>
<?php
	}
?>
</table>
</div>