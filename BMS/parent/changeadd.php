<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include('header.php'); ?>
<center>
<table>
<form action="updt.php" method="post">
<tr><td>Select Clubbing</td>
<td><select name="cl">
    <option>--Select--</option>
<?php

include('connection.php');

$res=mysqli_query($conn,'select * from club');
while($r=mysqli_fetch_row($res))
		{
			echo "<option value='$r[0]'>$r[1]</option>";
		}
	?>
    </select></td></tr><tr><td>
 Address </td><td>  <textarea name="add" id="textarea" cols="35" rows=""></textarea></td>
</tr>
<tr><td>
Pick Up Location
</td><td><input type="text" name="pul"></td></tr>
<tr><td>    <input type="Submit" value="Update" /></td>
<td><input type="button" value="Cancel" onclick="javascript:window.location='home.php'"/></td></tr>
    </form>
</table>
</center>
</body>
</html>