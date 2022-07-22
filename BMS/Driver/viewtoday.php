<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//session_start();
error_reporting(0);
include('header.php');
date_default_timezone_set("Asia/Kolkata");
$y=date("20"."y-m-d");
echo "Today's Date:".$y."<br>";
$r=$_SESSION['dri'];
include('connection.php');
$res=mysqli_query($conn,"select S_name,Pick_up_location,C_name,s.Contact from student s,club c where S_id in(select S_id from clubing where D_no=$r[0] and date like '$y') and Clubing_id=C_id");
if($res)
{?>
<table border="1">
<tr>
<th>Student Name
</th>
<th>Pick up Point</th>
<th>Clubbing </th>
<th>Contact</th>
</tr>
<?php
	while($r1=mysqli_fetch_array($res))
	{?>
		
	<tr>
    <td><?php echo $r1[0]; ?></td>
    <td><?php echo $r1[1]; ?></td>
    <td><?php echo $r1[2]; ?></td>
	<td><?php echo $r1[3]; ?></td>
    </tr>
    
	<?php }
	echo "</table>";

}
else
{
	echo "Not Clubbed yet Contact Admin";
}
?>
</body>
</html>