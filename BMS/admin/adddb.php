<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$nm=$_POST['nm'];
$mno=$_POST['mno'];
$add=$_POST['add'];
$lno=$_POST['lno'];
include('connection.php');
$res=mysqli_query($conn,"insert into driver values(D_no,'$nm',$mno,'$add',$lno)");
if($res)
{
		echo "<script>alert('Driver Added Successfully')</script>";	
}
else
{
		echo "<script>alert('Try Again')</script>";
}
include('adddriver.php');
?>
</body>
</html>