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
$res=mysqli_query($conn,"select S_id,S_name,Contact,Address,C_name,Pick_up_location from student s,club c where s.Clubing_id=c.C_id");

?>
<center>
<table border="1">
<tr>
<th>Roll Number</th>
<th>Student Name</th>
<th>Contact</th>
<th>Address</th>
<th>Pick Up Location</th>
<th>Delete/Suspend</th>
</tr>
<?php 
while($r=mysqli_fetch_array($res))
{
?>
<tr align="center">
<td><?php echo $r[0];?></td>
<td><?php echo $r[1];?></td>
<td><?php echo $r[2];?></td>
<td><?php echo $r[3];?></td>
<td><?php echo $r[4];?></td>
<td><a href="dels.php?id=<?php echo $r[0];?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</center>

</body>
</html>