
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
error_reporting(0);
include('connection.php');
$res=("insert into bus values(B_no,'$_POST[nm]')");
if(mysqli_query($conn, $res))
{
	echo "<script>alert('Bus Added Successfully')</script>";	
}
else
{
	echo "<script>alert('Try Again')</script>";
}
include('addbus.php');
?>
</body>
</html>








