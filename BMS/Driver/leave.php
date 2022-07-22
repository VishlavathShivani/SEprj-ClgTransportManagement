<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leave Application</title>
</head>

<body>
<center>
<?php
include('header.php');
?>
<form action="applyleave.php" method="post">.
<table width="365" border="0">
  <tr>
    <td width="95">ID</td>
    <td colspan="3"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" required="required" /></td>
  </tr>
  <tr>
    <td>Leave Date</td>
    <td width="82"><select name="d">
    <option>---dd---</option>
    <?php
	for($i=1;$i<31;$i++)
	{
    echo "<option value='$i'>$i</option>";
	}
	?>
	</select></td><td width="90">
      <select name="m">
        <option>---mm---</option>
        <?php
	for($i=1;$i<12;$i++)
	{
    echo "<option value='$i'>$i</option>";
	}
	?>
      </select></td>
      <td width="80">
      <select name="y">
        <option>---yy---</option>
      <?php
date_default_timezone_set("Asia/Kolkata");
$y=date("y");
echo "<option>$y</option>";
?>
</select>

      </td>
  </tr>
  <tr>
    <td><input type="submit" value="submit"/></td>
    <td><button type="button" value="none" onclick="javascript:window.location='home.php'">Cancel</button></td>
  </tr>
</table>
</form>
</center>
</body>
</html>