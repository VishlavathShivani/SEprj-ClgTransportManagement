<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$d=$_GET['dt'];
$id=$_GET['id'];
include('connection.php');
$res=mysqli_query($conn,"delete from dleaves where D_no=$id and Leave_date=$d");
if($res)
{
		echo "<script>alert('Leave Cancelled')</script>";	
		
}
else
{
			echo "<script>alert('Try Again')</script>";	
}
include('viewleaves.php');
?>
</body>
</html>