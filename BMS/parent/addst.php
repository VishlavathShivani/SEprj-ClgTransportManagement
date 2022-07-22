<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_POST['textfield'];
$nm=$_POST['textfield2'];
$cnt=$_POST['textfield3'];
$add=$_POST['textfield4'];
$cid=$_POST['textfield5'];
$pul=$_POST['textfield6'];
include('connection.php');
$res=mysqli_query($conn,"insert into student values($id,'$nm',$cnt,'$add',$cid,'$pul')");
if($res)
{
	echo "<script>alert('Your Registration Is SuccessFull')</script>"."<a href=login.php>Login Now</a>";
}
else
{
		echo "<script>alert('Please ENTER Valid Data')</script>"."<a href=reg.php>Go Back</a>";
}
?>

</body>
</html>