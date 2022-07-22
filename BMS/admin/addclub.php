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
//$res=$_SESSION['res'];
$did=$_SESSION['dri'];
$cid=$_SESSION['loc'];
$bno=$_SESSION['bno'];
$dt=$_SESSION['dt'];
//echo "Todays Date:$dt"."<br>"."Driver Id:".$did."<br>"."Clubbing ID:".$cid."<br>"."Bus No.".$bno."<br>";
include('connection.php');
$res=mysqli_query($conn,"select S_id,S_name from student where S_id not in(select S_id from leaves where Leave_date='$dt')and Clubing_id=$cid and S_id not in(select S_id from clubing where date='$dt') limit 16");
while($r=mysqli_fetch_array($res))
{
$res1=mysqli_query($conn,"insert into clubing values($bno,$cid,$r[0],$did,'$dt')"); 
if($res1)
{
	echo "<script>alert('Clubbed Record of:$r[1] Date:$dt')</script>";
}
else
{
		echo "<script>alert('Failure in Record of:$r[1]')</script>";
}
}

//session_destroy();
include('seldt.php');
?>


</body>
</html>