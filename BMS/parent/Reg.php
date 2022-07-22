<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<style>
 body {
    background-color: #DADDFC;
    }
</style>
</head>
<script language="javascript" type="text/javascript" src="valid.js">
</script>
<body>
<?php
	include('headerl.php');
?>
<form action="addst.php" method="post">
<center>
<table width="498" border="0">
  <caption>Student Registration Form</caption>
  <tr>
    <td width="261">Roll Number</td>
    <td width="227"><input type="text" name="textfield" id="tf" required="required" onchange="vrno()"/><p id="vcnm"></p></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="textfield2" id="textfield2" required="required" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input type="text" name="textfield3" id="tf3" required="required" onchange="isnum()"/><p id="vnm"></p></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><label for="textarea"></label>
      <textarea name="textfield4" id="textarea" cols="35" rows=""></textarea></td>
  </tr>
  <tr>
    <td>Clubing With</td>
    <td><select name="textfield5">
    <option>--Select--</option>
    <?php
		include('connection.php');
		$res=mysqli_query($conn,'select * from club');
		while($r=mysqli_fetch_row($res))
		{
			echo "<option value='$r[0]'>$r[1]</option>";
		}
	?>
    </select></td>
  </tr>
  <tr>
    <td>Pick Up Location</td>
    <td><input type="text" name="textfield6" id="textfield4" required="required" /></td>
  </tr>
  <tr>
    <td align="right"><input type="Submit" value='Register'></td>
    <td><input type="button" value="Cancel"onclick="javascript:window.location='Login.php'"></td>
  </tr>
</table>
<label for="textfield"></label>
</center>
</form>
</body>
</html>