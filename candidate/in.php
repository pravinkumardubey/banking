<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}

include("../connection.php");
$ac=$_POST['acc'];
$name=$_POST['name'];
$na=ucfirst($name);
$dob=$_POST['dob'];
$b=$ac-2502000101428000;
// echo "<br/>";

$query2="SELECT email 
FROM  `tbl_acount`where acc_no='$b'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);
$em=$row2['email'];
$email=$_SESSION['candidate'];
$query="SELECT * 
FROM  `tbl_acount` where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
$d=$row['amount'];	
$n=$row['name'];	
$acc=$row['acc_no'];	
echo "<br/>";

$do=$row['dob'];
}

	if($email=="$em")
	{
if($acc=="$b" and $name=="$n" and $dob=="$do")
{
echo "<center><h1>Dear <font color=green>$na</font> The Balance For Your Account No XXXXXXXXXXXX<a href=#>8$b</a>: INR<br/> <a href=#>$d</a>.SMS PNB PROD to <a href=#>5607040</a> detailed prduct list.<br/><font color=red>!!!THANK YOU!!!</font>";
}
else
{
	header("Location:inquery.php?msg=1");
}	
}
else
{
	header("Location:inquery.php?msg=2");
}
?>
<!DOCTYPE html>
<html>
<script>
window.onload=function()
{
	document.getElementById("l").play();
}
</script>

<body style="background:linear-gradient(to right,red,yellow);">
<audio id="l" src="../sound/po.mp3"/></audio>
</body>
</html>