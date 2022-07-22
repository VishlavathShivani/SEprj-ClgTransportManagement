<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
$res=mysqli_query($conn,"select * from student where S_name like '$_POST[textfield]' and S_id=$_POST[textfield2]");
$r=mysqli_fetch_array($res);
//echo $r[1];
if(!empty($r))
{
session_start();
$_SESSION['usr']=$r;
include('home.php');	
}
else
{
include('headerl.php');	
echo "Enter valid Credintials";	
}
?>
</body>
</html>