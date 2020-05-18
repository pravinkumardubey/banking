<?php
session_start();
if ($_SESSION['employee']=='') {
	session_destroy();
	header("Location:../index.php");
}
include("connection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['a'];
$dob=$_POST['date'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$cat=$_POST['select'];
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="upload/";
$a=$_POST['am'];
$o=$_POST['o'];
$address=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$aadhar=$_POST['aadhar'];
$national=$_POST['national'];
$dharm=$_POST['dharm'];
$d1=date("H:i:s");
$d2=date("06:30:00");
$d3=strtotime($d1)-strtotime($d2);
$d4=gmdate("H:i:s",$d3);

$m="+91".$mobile;

$query="INSERT INTO `banking`.`tbl_candidate` (`acount_no`, `name`, `fname`, `mname`, `gender`,`dob`, `email`, `password`, `mobile`, `category`, `file`, `address`, `city`, `pin`, `aadhar`, `national`, `dharm`, `date`) VALUES (NULL, '$name', '$fname', '$mname', '$gender','$dob', '$email', '$password', '$m', '$cat`', '$file', '$address','$city', '$pin', '$aadhar', '$national', '$dharm', curdate())";
mysql_query($query);
$query2="INSERT INTO `banking`.`tbl_acount` (`acc_no`, `name`, `dob`, `email`, `amount`, `date`,time) VALUES (NULL, '$name', '$dob', '$email', '$a', curdate(),'$d4')";
mysql_query($query2);

move_uploaded_file($tmp_name,$location.$file);
header("Location:vcandidate.php");
?>
