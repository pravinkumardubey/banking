<?php
error_reporting(0);
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
?>
<html>
<head>
<script>
alert("Dear Candidate Do Not Share your Account Number!!!");
</script>
</head>
</html>
<?php
include("../connection.php");
$ac=$_POST['acc'];
$name=$_POST['name'];
$na=ucfirst($_POST['name']);
$dob=$_POST['dob'];
$amo=$_POST['amo'];
$b=$ac-2502000101428000;
//echo "<br/>";
$email=$_SESSION['candidate'];
$query2="SELECT * 
FROM  `tbl_candidate` where email='$email'";
$res2=mysqli_query($con,$query2);
while($row2=mysqli_fetch_array($res2))
{
$acn=$row2['acount_no'];
$n=$row2['name'];
$d=$row2['dob'];
$mobile=$row2['mobile'];
$un=$row2['unauthorize'];
//
}
$un=$un+1;
$query3="select * from tbl_acount where acc_no='$b'";
$res3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($res3))
{
$am=$row3['amount'];
$block=$row3['block'];
}
$s=date("H:i:s");
$a=("06:30:00");
$de=strtotime($s)-strtotime($a);
$h=gmdate("H:i:s",$de);
$b=$ac-2502000101428000;
$query5="select * from tbl_acount where acc_no='$b' and name='$name' and dob='$dob'";
$res5=mysqli_query($con,$query5);
$count=mysqli_num_rows($res5);
if ($row4=mysqli_fetch_array($res5)) {
	$c_email=$row4['email'];
}
if($block=='block'){
	header("Location:cash.php?msg=4");
}
$hh=$am-$amo;
if($name=="$n" and $dob=="$d" and $b=="$acn")
{
	if($amo<$am)
	{
$query="update `banking`.`tbl_acount`set amount='$hh' where acc_no='$b'";
mysqli_query($con,$query);
}
else
{
	header("Location:cash.php?msg=2");
}
}
else if ($count==1) {
	mysqli_query($con,"INSERT INTO `banking`.`tbl_unauthorize` (`id`, `h_email`,c_email, `name`, `date`, `time`) VALUES (NULL, '$email','$c_email', '$n', curdate(), curtime())");
	mysqli_query($con,"UPDATE  `banking`.`tbl_candidate` SET  `unauthorize` =  '$un' WHERE  `tbl_candidate`.`acount_no`='$acn'");
	header("Location:cash.php?msg=3");
}
else
{
	header("Location:cash.php?msg=1");
}
echo "<center><h1>Dear <font color=green>$na</font> Your Account No <font color=blue>XXXXXXXXXXXX8$acn</font> Has Been Debited By Rs.<font color=blue>$amo</font> Rupes Balence Remaining is Rs.<font color=green>$hh..</font>Rupes<br/><font color=red>!!!THANK YOU!!!</font>";
	// Authorisation details.
	$username = "pravinkumardubey07@gmail.com";
	$hash = "40a9d780b38896f42789825785a70ee40cad0ccbfc7d150407a7598fe6bc7b04";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $mobile; // A single number or a comma-seperated list of numbers
	$message = "Hi Dear $na Your Account No XXXXXXXXXXXX8$acn Has Been Debited By Rs.$amo Rupes Balence Remaining is Rs.$hh..Rupes!!!THANK YOU!!!";
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
?>
<!DOCTYPE html>
<html>
<script>
window.onload=function()
{
document.getElementById("g").play();
}
</script>

<body style="background:linear-gradient(to right,red,yellow);">
<audio id="g" src="../sound/po.mp3"/>
</audio>
<body>
<center><a href="../logout.php">Logout</a></center>
</body>

