<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
$id=$_REQUEST['id'];
include("connection.php");
$query="SELECT * FROM  `tbl_lone` where id='$id'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
	echo $status=$row['status'];
	$acn=$row['acc_no'];
	$amo=$row['amount'];
}
$query6="SELECT * FROM  `tbl_acount`where acc_no='$acn'";
$res6=mysqli_query($con,$query6);
if($row6=mysqli_fetch_array($res6))
{
	$amou=$row6['amount'];
	
}
$cre=$amo+$amou;
if($status=='Y')
{
	header("Location:lone.php");
}
else
{
	$query5="UPDATE  `banking`.`tbl_acount` SET  `amount` =  '$cre' WHERE `acc_no`='$acn'";
mysqli_query($con,$query5);
mysqli_query($con,"UPDATE  `banking`.`tbl_lone` SET  `status` =  'Y' WHERE  `tbl_lone`.`id`='$id'");
}
header("Location:lone.php");
?>