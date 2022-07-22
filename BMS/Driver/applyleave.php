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
$dt="20".$_POST['y']."/".$_POST['m']."/".$_POST['d'];
if($r[0]==$_POST['textfield'])
{
	include('connection.php');
	$r=mysqli_query($conn,"insert into dleaves values($_POST[textfield],'$dt')");
	if($r)
	{
		echo "<script>alert('Applied Successfully')</script> ";	
		include('leave.php');
	}
	else
	{
				echo "<script>alert('Try Again')</script> ";	
				include('leave.php');
	}
}
else
{
		echo "<script>alert('Enter Valid Roll no.')</script> ";	
				include('leave.php');
}
?>
</body>
</html>