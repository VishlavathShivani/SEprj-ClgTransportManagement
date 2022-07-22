<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript" src="valid.js">
</script><body>
<?php 
include('header.php');
?>
<center>
<form action="adddb.php" method="post">
<table width="362">
<tr>
<td width="175">
Driver Name
</td>
<td width="175"><label for="textfield" ></label>
  <input type="text" name="nm" id="textfield" required="required"/>
</td>
</tr>
<tr>
  <td>Mobile Number</td>
  <td>
    <input type="text" name="mno" id="tf3" required="required"  onchange="isnum()"/><p id="vnm"></p></td>
</tr>
<tr>
  <td>Address</td>
  <td><label for="textarea"></label>
    <textarea name="add" id="textarea" cols="25" rows="4" required="required"></textarea></td>
</tr>
<tr>
  <td>License Number</td>
  <td>
    <input type="text" name="lno" id="tf" required="required" onchange="vrno()"/><br><p id="vcnm"></p></td>
</tr>
<tr>
  <td><input type="submit" name="button"  value="Add" /></td>
  <td><button  onclick="javascript:window.location='home.php'">Cancel</button></td>
</tr>
</table>
</form>
</center>
</body>
</html>