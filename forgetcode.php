<?php
include("connection.php");
$select=$_POST['select'];
$email=$_POST['email'];
if($select=='Employee')
{
	if($row=mysqli_fetch_array(mysqli_query($con,"select * from tbl_employ where email='$email'")))
	{
		$password=$row['password'];
		$name=$row['name'];
		$mobile=$row['mobile'];
	}
	else
		{
			header("location:forget.php?m=1");
		}
}

if($select=='Candidate')
{
	if($row2=mysqli_fetch_array(mysqli_query($con,"select * from tbl_candidate where email='$email'")))
	{
		$password=base64_decode($row2['password']);
		$name=$row2['name'];
		$mobile=$row2['mobile'];
	}
	else
		{
			header("location:forget.php?m=1");
		}
}
	// Authorisation details.
	$username = "pravinkumardubey07@gmail.com";
	$hash = "40a9d780b38896f42789825785a70ee40cad0ccbfc7d150407a7598fe6bc7b04";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "PRAVIN"; // This is who the message appears to be from.
	$numbers = $mobile; // A single number or a comma-seperated list of numbers
	$message = "Hi dear $name your Password for Email $email is $password please change your password and login again";
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