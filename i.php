<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
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
$address=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$aadhar=$_POST['aadhar'];
$national=$_POST['national'];
$dharm=$_POST['dharm'];
$mo=trim($mobile);
$mob=strlen($mo);
$aadh=strlen($aadhar);
$pinno=strlen($pin);
if ($mob==10 and is_numeric($mo) and $mo[0]>=6) {
//
}
else{
	header("Location:imploy.php?m=1");
}
if ($pinno==6 and is_numeric($pin)) {
	//
}
else{
	header("Location:imploy.php?m=2");
}
if ($aadh==12 and is_numeric($aadhar)) {
	# code...
}
else{
	header("Location:imploy.php?m=3");
}


if ($mob==10 and is_numeric($mo) and $mo[0]>=6 and $pinno==6 and is_numeric($pin) and $aadh==12 and is_numeric($aadhar)) {

$query="INSERT INTO `banking`.`tbl_employ` (`id`, `name`, `fname`, `mname`, `gender`, `email`, `password`, `mobile`, `category`, `file`, `address`, `city`, `pin`, `aadhar`, `national`, `dharm`, `date`) VALUES (NULL, '$name', '$fname', '$mname', '$gender', '$email', '$password', '$mo', '$cat', '$file', '$address','$city', '$pin', '$aadhar', '$national', '$dharm', curdate())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$file);
header("Location:viemploy.php");
}
?>
