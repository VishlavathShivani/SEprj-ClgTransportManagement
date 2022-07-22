<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
 body {
    background-color: #D4F1F4;
    }
</style>
</head>
<script>
function verify()
{
	var nm=document.getElementById("tf").value;
	if(nm.length<7 || nm.length>10)
	{
		document.getElementById("msg").innerHTML="Number Must Be in<br>MH 12 QB9766<br> this Format only"+nm;
		document.getElementById("tf").value=null;
	}	
	else
	{
		document.getElementById("msg").innerHTML=" ";	
	}
}
</script>
<body>
<?php
include('header.php');
?>
<form method="post" action="addb.php">
<input type="text" id="tf" name="nm" onchange="verify()" required="required">
<p id="msg"></p>
<input type="submit" value="Add Bus">
<button onclick="javascript:window.location='home.php'">Cancel</button>
</form>
</body>
</html>