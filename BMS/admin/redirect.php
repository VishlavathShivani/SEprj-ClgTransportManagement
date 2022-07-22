<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Portal</title>
</head>

<body>
<?php
if($_POST['textfield']=='vnrvjiet' && $_POST['textfield2']=='Admin')
{
include('home.php');	
}
else
{
	echo "<script>alert('Enter Valid Credintials')</script>";
	include('login.php');	
}
?>
</body>
</html>