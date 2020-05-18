<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$code=$_SESSION['code'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['a'];
echo $dob=$_POST['date'];
$email=$_POST['email'];
$pass=$_POST['password'];
$password=base64_encode($pass);
$mobile=$_POST['mobile'];
$cat=$_POST['select'];
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="upload/";
$a=$_POST['am'];
$o=$_POST['o'];
$address=$_POST['address'];//ferodit
$city=$_POST['city'];
$pin=$_POST['pin'];
$aadhar=$_POST['aadhar'];
$national=$_POST['national'];echo "<br/>";
$dharm=$_POST['dharm'];
$today=date('Y-m-d');
$p_date=strtotime('-18 year');
echo $o_date=date('Y-m-d',$p_date);
if ($o_date>$dob) {
	# code...
}
else{
	header("Location:candidate.php?m=7");
}
if ($_POST['captcha']==$code) {
	echo "Valid captcha";
}
else{
	header("Location:candidate.php?m=6");
}
$d1=date("H:i:s");
$d2=date("06:30:00");
$d3=strtotime($d1)-strtotime($d2);
$d4=gmdate("H:i:s",$d3);
$mo=trim($mobile);
$mob=strlen($mo);
$aadh=strlen($aadhar);
$pinno=strlen($pin);
$query3="select * from tbl_candidate where email='$email'";
$res3=mysqli_query($con,$query3);
$count=mysqli_num_rows($res3);
if ($count=='0') {
	//header("Location:candidate.php?m=5");
}
else{
	header("Location:candidate.php?m=5");
}
if ($mob==10 and is_numeric($mo) and $mo[0]>=6) {
//
}
else{
	header("Location:candidate.php?m=1");
}
if ($pinno==6 and is_numeric($pin)) {
	//
}
else{
	header("Location:candidate.php?m=2");
}
if ($aadh==12 and is_numeric($aadhar)) {
	# code...
}
else{
	header("Location:candidate.php?m=3");
}
if ($a>=500) {
	# code...
}
else{
	header("Location:candidate.php?m=4");
}


if ($mob==10 and is_numeric($mo) and $mo[0]>=6 and $pinno==6 and is_numeric($pin) and $aadh==12 and is_numeric($aadhar) and $a>=500 and $count==0 and $o_date>$dob) {

$query="INSERT INTO `banking`.`tbl_candidate` (`acount_no`, `name`, `fname`, `mname`, `gender`,`dob`, `email`, `password`, `mobile`, `category`, `file`, `address`, `city`, `pin`, `aadhar`, `national`, `dharm`, `date`) VALUES (NULL, '$name', '$fname', '$mname', '$gender','$dob', '$email', '$password', '$mo', '$cat', '$file', '$address','$city', '$pin', '$aadhar', '$national', '$dharm', curdate())";
mysqli_query($con,$query);
$query2="INSERT INTO `banking`.`tbl_acount` (`acc_no`, `name`, `dob`, `email`, `amount`, `date`,time) VALUES (NULL, '$name', '$dob', '$email', '$a', curdate(),'$d4')";
mysqli_query($con,$query2);

move_uploaded_file($tmp_name,$location.$file);
header("Location:vcandidate.php");
}
?>
