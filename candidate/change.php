<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
include("../connection.php");
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$email=$_SESSION['candidate'];
$query="select * from tbl_candidate where email='$email'";

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
	$query2="update tbl_candidate set password='$np' where email='$email'";
	mysqli_query($con,$query2);
	
}
else
{
		header("Location:password.php");
}
}
header("Location:view.php");
?>