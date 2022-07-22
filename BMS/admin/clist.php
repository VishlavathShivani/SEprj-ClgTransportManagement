<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('header.php');
include('connection.php');
$dt=$_POST['dt'];
$id=$_POST['bno'];
$res=mysqli_query($conn,"select S_name,s.Contact,d.D_name,d.Contact,RTO_no,Pick_up_location,date from student s,driver d,bus b,clubing c where s.S_id=c.S_id and d.D_no=c.D_no and b.B_no=c.B_no and date='$dt' and c.C_id=$id");
?>
<table border="1">
<tr>
<th>Student Name</th>
<th>Student Contact</th>
<th>Driver Name</th>
<th>Driver Contact</th>
<th>Bus Number</th>
<th>Pick Up/Drop</th>
<th>Date</th>
</tr>
<?php
while($r=mysqli_fetch_array($res))
{
echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td> ".$r[5]."</td><td> ".$r[6]."</td></tr>";	
}
?>
</table>
</body>
</html>