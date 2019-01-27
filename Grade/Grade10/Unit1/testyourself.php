<div id="content-unit">
	<h3 align="center">VOCABULARY</h3>
	<?php
	// truyen bien vao gia tri STT de lam thay doi cau hoi
	$hoi=1;
	$red = mysql_query('SELECT * FROM voc WHERE STT="'.$hoi.'"');
	?>
  	<div id="voc1" align="center">
	  <form action="modules/xuly/xuly.php?hoi=1" method="post">
		<?php
			//bat dau vong lap dua ra 
  			//while (
			$value=mysql_fetch_array($red);
			//){
		?>
    	<table width="450" border="1">
      	<tr>
        	<td width="200" rowspan="3"><div align="center"><img src="img unit/<?php echo $value["unit"] ?>/<?php echo $value["image"] ?>" alt="voc1" width="150" height="150"></div></td>
        	<td width="100" height="30"><div align="center">
          		<?php
				$trl='1';
		  			if (isset($_GET["trl"])) {
						$trl = $_GET["trl"];
				?>
                	<input name="trl" type="text" id="trl" size="15" value="<?php echo $trl;?>">
                 <?php
					}
					else {
		  		?>
          			<input name="trl" type="text" id="trl" size="15">
          		<?php
					}
		  		?>
      		 </div></td>
      	</tr>
      <tr>
        <td width="100" height="24">
          <div align="center">
          <?php
			$dapan='';
		  	if (isset($_GET["dapan"])) {
				$dapan=$_GET["dapan"];
			}
		 	if ($dapan==$trl)  {
				echo("$trl");
			} else
			if ($dapan!=$trl) {
				echo("$dapan");
			}
			if ($dapan==NULL) {
				echo("Đáp án");
			}
		 ?>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25"><div align="center">
        <input name="check1" type="text" id="chech1" value="
        <?php
			if ($dapan==NULL or $trl==NULL) {
				echo "Kiểm tra";
			} else
			if ($dapan!=$trl) {
				echo 'incorrect';
			} else
			if ($dapan==$trl) {
				echo 'correct';
			} 
		?>
        " size="15" />
        <?php
			$kt='';
			$trl='';
			$dapan='';
		 ?>
        </div></td>
      </tr>
  </table>
    <?php
			//}
  ?>
  <table width="450" border="1">
  <tr>
    <td><div align="center">
      <input name="submit" type="submit" value="Check" />
    </div></td>
  </tr>
</table>
  </form>
  </div>
</div>