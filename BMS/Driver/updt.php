<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
session_start();
$r=$_SESSION['dri'];
$id=$r[0];
$nm=$_POST['tf2'];
$con=$_POST['tf3'];
$add=$_POST['tf4'];
include('connection.php');


$res=mysqli_query($conn,"update driver set D_name='$nm',Address='$add',Contact=$con where D_no=$id");
if($res)
{
echo "<script>alert('Updated Successfully')</script>";
	$r[0]=$id;
	$r[1]=$nm;
	$r[2]=$con;
	$r[3]=$add;
	$_SESSION['dri']=$r;
}
else
{
	echo "<script>alert('Try Again')</script>";
}
include('profile.php');
?>
</body>
</html>