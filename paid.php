<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
$id=$_REQUEST['id'];
include("connection.php");
$query="SELECT status 
FROM  `tbl_fix` where id='$id'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
if($row['status']=='N')
{
$query2="UPDATE  `banking`.`tbl_fix` SET  `status` =  'Y' WHERE  `tbl_fix`.`id`='$id'";
mysqli_query($con,$query2);
}
$query="SELECT * 
FROM  `tbl_fix` where id='$id'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
	$ac=$row['acc_no'];
	$am=$row['amount'];
	// echo $status=$row['status'];
}

$amou=$am*2;

$query3="SELECT * 
FROM  `tbl_acount` where acc_no='$ac'";
$res3=mysqli_query($con,$query3);
$row3=mysqli_fetch_array($res3);
$amo=$row3['amount'];
$amount=$amou+$amo;


$query4="UPDATE  `banking`.`tbl_acount` SET  `amount` =  '$amount' WHERE  acc_no='$ac'";
mysqli_query($con,$query4);

$query5="DELETE FROM `banking`.`tbl_fix` WHERE `tbl_fix`.`id` =$id";
mysqli_query($con,$query5);

header("Location:fixdeposit.php");
?>