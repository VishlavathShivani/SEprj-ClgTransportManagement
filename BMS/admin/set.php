<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form action="addclub.php" method="post">
 <table>
 
  </table>
<table width="286" border="0">
  <tr>
    <td width="132">Driver Name</td>
    <td width="144"><form id="form1" name="form1" method="post" action="">
      <label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" disabled="disabled" value="<?php printf("$r2[1]"); ?>"/>
    </form></td>
  </tr>
  <tr>
    <td>Clubbing Area</td>
    <td><input type="text" name="textfield2" id="textfield2" disabled="disabled" value="<?php printf("$r1[1]"); ?>"/></td>
  </tr>
  <tr>
  <td>Bus Number</td>
  <td><input type="text"name="bno" required="required"></td>
  </tr>
  <tr>
  <td>
  <?php echo $_SESSION['dt']; ?>
  </td>
  </tr>
</table>
<?php
//session_start();
error_reporting(0);
$res=mysqli_query($conn,"select * from student where Clubing_id=$r1[0] and S_id not in(select S_id from leaves where Leave_date like '$_SESSION[dt]')");

?>
<table width="1111" height="26" border="0">
  <tr>
    <td width="130">Student Name</td>
    <td width="245">Pick up Location</td>
    
    <td width="369">Club</td>
    
  </tr>
  <?php 
  
  while($r=mysqli_fetch_array($res))
  {
  ?>
  <input type="text" value="<?php  printf($_SESSION['r1'][0]); ?>" name="loc" hidden/>
  <input type="text" value="<?php printf($_SESSION['r2'][0]); ?>" name="dri" hidden/>
  <input type="text" value="<?php printf($r[0]); ?>" name="sid" hidden />
  
  <tr>
    <td width="130"><?php echo $r[1]; ?></td>
    <td width="245"><?php echo $r[5]; ?></td>
    
    <td width="369"><input type="submit" value="Club"></td>
    
  </tr>
  <?php }?>
</table>
</form>
</center>

</body>
</html>