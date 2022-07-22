<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
date_default_timezone_set("Asia/Kolkata");
$t=date("h:i:s");
$dt=date("20"."y-m-d");
include('header.php');
include('connection.php');
$res=mysqli_query($conn,"select * from club where C_id in(select C_id from clubing where date='$dt')");
?>
<form action="clist.php" method="post">
<input type="text" value="<?php echo $dt; ?>" name="dt" hidden="hidden">
Select Area
<select name="bno"><option>--Select--</option>
<?php
while($r=mysqli_fetch_array($res))
{
echo "<option value='$r[0]'>$r[1]</option>";	
}
?>
</select>
<input type="submit" value="View">
</form>
</body>
</html>