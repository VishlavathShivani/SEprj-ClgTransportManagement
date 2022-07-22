<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
$nm=$_POST['textfield'];
$pass=$_POST['textfield2'];
include('connection.php');
$res=mysqli_query($conn,"select * from driver where D_no=$pass and D_name like '$nm'");
if($res)
{
	session_start();
	$r=mysqli_fetch_row($res);
	$_SESSION['dri']=$r;	
	include('home.php');
}
else
{
	echo "<script>alert('Enter Valid Credintials')</script>";
	include('login.php');	
}
?>
</body>
</html>