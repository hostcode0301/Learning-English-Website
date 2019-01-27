<div id="verb">
<div id="error">
<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"]=="1") {
			echo "Xin vui lòng nhập đầy đủ thông tin trước khi upload file";
		}
		if ($_GET["error"]=="0") {
			echo "Cảm ơn vì đã upload file cho trang của chúng tôi";
		}
	}
?>
</div>
	<form action="modules/Upload/xulyup.php" method="post" enctype="multipart/form-data">
    <table width="750" border="2">
  <tr>
    <td colspan="2"><h3 align="center">Upload file lên trang web</h3></td>
    </tr>
  <tr>
    <td>Upload:</td>
    <td width="535" colspan="-2"><input name="userfile" type="file" size="50" /></td>
  </tr>
  <tr>
    <td>Tên file: </td>
    <td colspan="-2"><label for="tenfile"></label>
      <input name="tenfile" type="text" id="tenfile" size="50" /></td>
  </tr>
  <tr>
    <td>Mô tả:</td>
    <td colspan="-2"><label for="mota"></label>
      <input name="mota" type="text" id="mota" size="50" /></td>
  </tr>
  <tr>
    <td>Phân quyền: </td>
    <td colspan="-2"><label for="pq"></label>
      <label for="pq"></label>
      <select name="pq" size="1" id="pq">
        <option value="all" selected="selected">all</option>
        <option value="admin">admin</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="submit" id="nut" value="Upload" />
    </div></td>
    </tr>
  </table>
    </form>
    <h4>* Chú ý: Tên file phải trùng với tên file Upload tránh không thể download được và tên file không có dấu </h4>
    <h4>* Mô tả: </h4>
    <h4>VD: Word,Exel,Image,..</h4>
    <h4>* Phân quyền:</h4>
    <h4>all: tất cả người dùng có thể xem và download</h4>
    <h4>admin: chỉ admin mới được xem và download</h4>
</div>