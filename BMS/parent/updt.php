<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
error_reporting(0);
include('connection.php');
$id=$_SESSION['usr'];
$ad=$_POST['add'];
$cl=$_POST['cl'];
$pul=$_POST['pul'];
$res=mysqli_query($conn,"update student set Address='$ad',Clubing_id=$cl,Pick_up_location='$pul' where S_id=$id[0]");
if($res)
{
	echo "<script>alert('Updated Successfully')</script>";	
}
else
{
	echo "<script>alert('Error Try Again')</script>";	
}
include('home.php');

?>
</body>
</html>