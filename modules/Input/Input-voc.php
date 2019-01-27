<div id="boxtin">
<h2>Input vocabulary to unit</h2>
<form action="../Nhap/modules/Nhap/xuly.php" method="post">
<table width="800" border="2">
  <tr>
    <td width="200"><div align="center">Vocabulary</div></td>
    <td width="200"><div align="center">Speak</div></td>
    <td width="200"><div align="center">Mean</div></td>
    <td width="200"><div align="center">Unit</div></td>
  </tr>
  <tr>
    <td height="50">
      <div align="center">
        <input name="voc" type="text" id="word" size="25" />
      </div>
    </td>
    <td>
      <div align="center">
        <input name="speak" type="text" id="speak" size="25" />
      </div>
    </td>
    <td>
      <div align="center">
        <input name="mean" type="text" id="mean" size="25" />
      </div>
    </td>
    <td><div align="center">
      <select name="select" size="1" id="select">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td height="30" colspan="4"><div align="center">
      <input type="submit" name="button" id="button" value="     Nhập     " />
    </div></td>
    </tr>
</table>
</form>
<?php
    if (isset($_SESSION["inputsatus"])) {
        $input = $_SESSION["inputstatus"];
    }
    if ($input = 'fail') {
        echo ("Xin hay nhap day du thong tin truoc khi input tu vung");
    }
?>
</div>