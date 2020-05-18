<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;

$query="select * from tbl_admin";

$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$pp=$row['password'];
}
if($pp==$op)
{
//echo "change hoga";
if($op==$np)
{
	header("Location:password.php");
}
else if($np==$cnp)
{
	$query2="update tbl_admin set password='$np'";
	mysqli_query($con,$query2);
	
}
else
{
		header("Location:password.php");
}
}
?>