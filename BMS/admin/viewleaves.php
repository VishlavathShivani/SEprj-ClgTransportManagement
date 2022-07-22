<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<?php
include('header.php');
include('connection.php');
$res=mysqli_query($conn,"select d.D_no,D_name,Leave_date from driver d,dleaves dl where d.D_no=dl.D_no");
?>
<table border="1">
<tr>
<th>Driver Name</th>
<th>Leave Date</th>
<th>Delete</th>
</tr>
<?php 
while($r=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $r[1]; ?></td>
<td><?php echo $r[2]; ?></td>
<td><a href="delleave.php?id='<?php printf($r[0]);?>'&dt='<?php printf($r[2]);}?>'">Delete</a>
</td></tr>
</table>
</center>
</body>
</html>