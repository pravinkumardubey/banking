<?php
session_start();
if ($_SESSION['employee']=='') {
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
$email=$_SESSION['employee'];
$query="select * from tbl_employ where email='$email'";

$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
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
	$query2="update tbl_employ set password='$np' where email='$email'";
	mysql_query($query2);
	
}
else
{
		header("Location:password.php");
}
}
header("Location:view.php");
?>