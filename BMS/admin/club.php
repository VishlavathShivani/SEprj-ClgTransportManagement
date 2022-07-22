<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('header.php');
$dt="20".$_POST['y']."/".$_POST['m']."/".$_POST['d'];
$_SESSION['dt']=$dt;
include('connection.php');
$res=mysqli_query($conn,"select * from bus where B_no not in(select B_no from clubing where date='$dt')");
?>
<form action="list.php" method="post">
<table>
<tr>
<td>
Date
</td>
<td><input type="text" value="<?php printf($dt);?>" disabled="disabled"></td>
</tr>
<tr>
<td>Bus Number</td>
<td><select name="bno"><option>--Select--</option>
<?php
while($r=mysqli_fetch_array($res))
{
echo "<option value='$r[0]'>$r[1]</option>";	
}
?>
</select></td>
</tr>
<tr>
<td>
Select Clubbing
</td>
<td>
<select name="loc">
<option>--Select--</option>
<?php
include('connection.php');
$res=mysqli_query($conn,"select * from club where C_id not in(select C_id from clubing where date='$dt')");
while($r=mysqli_fetch_array($res))
{
	echo "<option value=$r[0]>$r[1]</option>";
}
$res1=mysqli_query($conn,"select D_no,D_name from driver where D_no not in(select D_no from dleaves where Leave_date='$dt')");
?>
</select>
</td>
</tr>
<tr>
<td>Select Driver</td>
<td><select name="dri">
<option>--Select--</option>
<?php 
while($r1=mysqli_fetch_array($res1))
{
	echo "<option value=$r1[0]>$r1[1]</option>";
}

?>
</select>
</td>
</tr>
<tr>
<td>
  <input type="submit" value="Next">
  </td><td><button type="button" value="none" onclick="javascript:window.location='home.php'">Cancel</button></td>
</tr>
</table>
</form>
</body>
</html>