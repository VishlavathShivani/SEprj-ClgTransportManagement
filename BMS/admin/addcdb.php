<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$c=$_POST['n1'];
include('connection.php');
$res=mysqli_query($conn,"insert into club values(C_id,'$c')");
if($res)
{
	echo "<script>alert('Club Area Added Successfully')</script>";	
}
else
{
	echo "<script>alert('Error Try Again')</script>";	
}
include('addarea.php');
?>
</body>
</html>