<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
include("../connection.php");
$ac=$_POST['acc'];
$amo=$_POST['amo'];

echo "<br/>";
$email=$_SESSION['candidate'];
$query3="select * from tbl_acount where email='$email'";
$res3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($res3))
{
$am=$row3['amount'];
$account=$row3['acc_no'];
}

$b=$ac-2502000101428000;
$query="select * from tbl_acount where acc_no='$b'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
while($row=mysqli_fetch_array($res))
{
$amount=$row['amount'];
}
echo "<br/>";
if ($account==$b) {
	header("Location:transfer.php?m=1");
}
else if($count==0)
{
	header("Location:transfer.php?m=3");
}
else if($am>=$amo)
{
$amou=$amount+$amo;
$amoun=$am-$amo;
mysqli_query($con,"UPDATE  `banking`.`tbl_acount` SET  `amount` =  '$amou' WHERE  `tbl_acount`.`acc_no`='$b'");
mysqli_query($con,"UPDATE  `banking`.`tbl_acount` SET  `amount` =  '$amoun' WHERE  `tbl_acount`.`acc_no`='$account'");
header("Location:dashboard.php");
}
else
{
	header("Location:transfer.php?m=2");
}
?>