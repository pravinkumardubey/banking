<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
include("../connection.php");
$ac=$_POST['acc'];
$name=$_POST['name'];
$na=ucfirst($_POST['name']);
$dob=$_POST['dob'];
$amo=$_POST['amo'];
echo "<br/>";
$email=$_SESSION['candidate'];
$query2="SELECT * 
FROM  `tbl_candidate` where email='$email'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2))
{
$acn=$row2['acount_no'];
$n=$row2['name'];
$d=$row2['dob'];
$mobile=$row2['mobile'];
}
$query3="select * from tbl_acount where email='$email'";
$res3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($res3))
{
$jk=$row3['date'];
$am=$row3['amount'];
}

$b=$ac-2502000101428000;
echo "<br/>";
$hh=$am+$amo;
$o=date("d:m:Y");
$s=date("h:i:s");
$a=("06:30:00");
$de=strtotime($s)-strtotime($a);
$h=gmdate("h:i:s",$de);
if($name==$n and $dob==$d and $b==$acn)
{
$query="update `banking`.`tbl_acount`set amount='$hh', time='$h' where acc_no='$b'";
mysqli_query($con,$query);
}
else 
{
	header("Location:credit.php?msg=1");
}
echo "<center><h1>DEAR <font color=green>$na</font> Your Account No:<font color=red>$ac</font> Has Credited with Rs.<font color=red>$amo </font>on<font color=green> $o</font> at <font color=green>$h </font>Aval Balence in Your Account is Rs.<font color=green>$hh ..CR</font><br> Helpline <a href=#>18001802222</a>";
/*
	// Authorisation details.
	$username = "pravinkumardubey07@gmail.com";
	$hash = "40a9d780b38896f42789825785a70ee40cad0ccbfc7d150407a7598fe6bc7b04";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $mobile; // A single number or a comma-seperated list of numbers
	$message = "Hii Dear $na Your Account No $ac Has Been Credited with Rs.$amo Rupes on $o at $h Aval Balence in Your Account is Rs.$hh..CR  Helpline 18001802222";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
*/
?>
<!DOCTYPE html>
<html>
<script>
	window.onload=function()
	{
	document.getElementById("golu").play();
	}
</script>

<body style="background:linear-gradient(to right,red,yellow);">
<audio id="golu" src="../sound/po.mp3"/>
</audio>