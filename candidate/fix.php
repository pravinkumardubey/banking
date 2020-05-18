<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}

include("../connection.php");
$ac=$_POST['acc'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$amo=$_POST['amo'];

echo "<br/>";
$email=$_SESSION['candidate'];
$query2="SELECT * 
FROM  `tbl_candidate` where email='$email'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2,MYSQL_BOTH))
{
$acn=$row2['acount_no'];
$n=$row2['name'];
$fname=$row2['fname'];
$d=$row2['dob'];
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
$o=date("Y-m-d");

$t=strtotime("+1 year"); 
$to=date("Y-m-d",$t);



$s=date("h:i:s");
$a=("06:30:00");
$de=strtotime($s)-strtotime($a);
$h=gmdate("h:i:s",$de);
if($b==$acn and $name==$n and $dob==$d)
{
$query="INSERT INTO `banking`.`tbl_fix` (`id`, `acc_no`, `name`, `fname`, `dob`, `amount`, `date`, `time`,date_to,status) VALUES (NULL, '$b', '$name', '$fname', '$dob', '$amo', curdate(), '$h','$to','N')";
mysqli_query($con,$query);
header("location:dashboard.php");
}
else
{
	header("Location:fixdeposit.php?m=1");
}
?>