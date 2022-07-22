<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<?php
include('header.php');
include('connection.php');
$dt=$_SESSION['dt'];
$did=$_POST['dri'];
$cid=$_POST['loc'];
$bno=$_POST['bno'];
echo "Todays Date:$dt"."<br>"."Driver Id:".$did."<br>"."Clubbing ID:".$cid."<br>"."Bus No.".$bno."<br>";
$res=mysqli_query($conn,"select * from student where S_id not in(select S_id from leaves where Leave_date='$dt')and Clubing_id=$cid and S_id not in(select S_id from clubing where date='$dt') limit 16");
$_SESSION['res']=$res;
$_SESSION['dri']=$did;
$_SESSION['loc']=$cid;
$_SESSION['bno']=$bno;

?>
<table>
<tr>
<th>Student Name</th>
<th>Pick up Location</th>
</tr>
<?php
if(is_null($res))
{
	echo "No Clubing Data Avail for given Date and Location";
}
else
{
while($r=mysqli_fetch_array($res))
{?>
		<tr><td><?php echo $r[1]; ?></td><td><?php echo $r[5]; ?></td></tr> 
<?php }
}
?>
</table>
<a href="addclub.php">Club </a>
</center>
</body>
</html>