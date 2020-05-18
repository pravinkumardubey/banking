<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
session_start();
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
if($row2=mysqli_fetch_array($res2))
{
$acn=$row2['acount_no'];
$n=$row2['name'];
$d=$row2['date'];
}
$query3="select * from tbl_acount where email='$email'";
$res3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($res3))
{
$am=$row3['amount'];
}

$b=$ac-2502000101428000;
echo "<br/>";
$hh=$am+$amo;
$o=date("d:m:Y");
$s=date("H:i:s");
$a=("06:30:00");
$de=strtotime($s)-strtotime($a);
$h=gmdate("H:i:s",$de);
if($name==$n and $dob==$d and $b==$acn)
{
$query="update `banking`.`tbl_acount`set amount='$hh'";
mysqli_query($con,$query);
}
	header("Location:vcandidate.php");
?>