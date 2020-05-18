<?php
include("connection.php");
session_start();
$select=$_POST['select'];
$email=$_POST['email'];
$password=$_POST['password'];
$pass=base64_encode($_POST['password']);
if($select=='Admin')
{
	$query="SELECT * FROM  `tbl_admin` where email='$email' and password='$password'";
	$res=mysqli_query($con,$query);
	if($row=mysqli_fetch_array($res))
	{
	$_SESSION['user']=$email;
	header("Location:dashboard.php");
	}
	else
	{
		header("Location:index.php");
	}
}
else if($select=='Employee')
{
	$query3="SELECT * FROM  `tbl_employ` where email='$email' and password='$password'";
	$res3=mysqli_query($con,$query3);
	if($row3=mysqli_fetch_array($res3))
	{
	$_SESSION['employee']=$email;
	header("Location:employee/dashboard.php");
	}
	else
	{
		header("Location:index.php");
	}
	}

else if($select=='Candidate')
{
	$query2="SELECT * FROM  `tbl_candidate` where email='$email' and password='$password'";
	$res2=mysqli_query($con,$query2);
	if($row2=mysqli_fetch_array($res2))
	{
	$_SESSION['candidate']=$email;
	header("Location:candidate/dashboard.php");
	}
	else
	{
		header("Location:index.php");
	}
	}
?>