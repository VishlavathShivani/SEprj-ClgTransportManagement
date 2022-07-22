<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('header.php');
include('connection.php');
$r=$_SESSION['dri'];
echo "welcome $r[1]";
?>
<center><table width="312">
<form action="updt.php" method="post">
<tr>
<td width="139" height="47">Driver ID
</td>
<td width="161"><label for="textfield"></label>
  <input type="text" name="tf1" id="textfield" value="<?php echo $r[0]; ?>" disabled="disabled" />
</td>
</tr>
<tr>
  <td height="47">Driver Name </td>
  <td><input type="text" name="tf2" id="textfield2" value="<?php echo $r[1]; ?>"  /></td>
</tr>
<tr>
  <td height="47">Contact</td>
  <td><input type="text" name="tf3" id="textfield3" value="<?php echo $r[2]; ?>"  /></td>
</tr>
<tr>
  <td height="47">Address</td>
  <td><input type="text" name="tf4" id="textfield4" value="<?php echo $r[3]; ?>"  /></td>
</tr>
<tr>
  <td height="47"><input type="submit" id="button" value="Update" /></td>
  <td><input name="Button" type="button" id="button" value="Cancel" onclick="javascript:window.location='home.php'"/></td>
</tr>
</form>
</table>
</center>
</body>
</html>
