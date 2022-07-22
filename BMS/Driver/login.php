<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
 body {
    background-color: #DADDFC;
    }
</style>
</head>

<body>
<center>
<?php
include('headerl.php');

?>

<form action="redirect.php" method="post">
<table width="75%" border="0">
  <tr>
    <td width="37%" align="right">User Name</td>
    <td width="37%"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" required="required" /></td>
  </tr>
  <tr>
    <td align="right">Password</td>
    <td><label for="textfield2"></label>
      <input type="password" name="textfield2" id="textfield2" required="required"/></td>
  </tr>
  <tr>
    <td align="right"><input type="submit" name="button" id="button" value="Submit" /></td>
    <td><input type="reset" name="button2" id="button2" value="Reset" /></td>
  </tr>
</table>
</form>
</center>

</body>
</html>