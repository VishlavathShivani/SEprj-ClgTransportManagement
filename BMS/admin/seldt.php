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

<body>
<?php
include('header.php');
?>
<form action="club.php" method="post">
<table>
<tr>
    <td>Date</td>
    <td width="82"><select name="d">
    <option>---dd---</option>
    <?php
	for($i=01;$i<=31;$i++)
	{
    echo "<option value='$i'>$i</option>";
	}
	?>
	</select></td><td width="90">
      <select name="m">
        <option>---mm---</option>
        <?php
	for($i=01;$i<12;$i++)
	{
    echo "<option value='$i'>$i</option>";
	}
	?>
      </select></td>
      <td width="80">
      <select name="y">
        <option>---yy---</option>
      <?php
date_default_timezone_set("Asia/Kolkata");
$y=date("y");
echo "<option value='$y'>$y</option>";
?>
</select>

      </td>
  </tr>
  <tr>
  <td>
  <input type="submit" value="Next">
  </td><td><button type="button" value="none" onclick="javascript:window.location='home.php'">Cancel</button></td></tr>
  </table>
  </form>
</body>
</html>