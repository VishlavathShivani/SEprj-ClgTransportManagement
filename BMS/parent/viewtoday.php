<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Today's Tracking</title>
</head>

<body>
<?php
error_reporting(0);
include('connection.php');
session_start();
$r=$_SESSION['usr'];
date_default_timezone_set("Asia/Kolkata");
$t=date("h:i:s");
$dt=date("20"."y-m-d");
$res=mysqli_query($conn,"select D_name,d.Contact,date,B_no from driver d,clubing c,student s where c.D_no=d.D_no and c.S_id=$r[0] and c.date like '$dt'");
if(!$res)
{
echo "<script>alert('error Try Again')</script>";
include('home.php');	
}
else
{
include("header.php");
$r1=mysqli_fetch_array($res);
?>
<table width="100%" border="20">
  <tr>
  	<td width="15%">Bus Number</td>
    <td width="15%">Driver Name</td>
    <td width="15%">Contact</td>
    <td width="15%">Pick Up point</td>
    <td width="15%">Drop Point</td>
    
  </tr>
  <tr>
    <td><?php echo $r1[3]; ?>
    <td><?php echo $r1[0]; ?></td>
    <td><?php echo $r1[1]; ?></td>
    
    <td><?php echo $r['5']; ?></td>
    <td><?php echo $r['5']; } ?></td>
    
  </tr>
</table>

</body>
</html>