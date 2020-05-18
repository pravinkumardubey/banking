<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$id=$_POST['hidden'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['a'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$cateory=$_POST['select'];
$location="upload/";
$address=$_POST['add'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$aadhar=$_POST['aadhar'];
$dharm=$_POST['dharm'];
$nationality=$_POST['nationality'];
$query="UPDATE  tbl_candidate SET  `name` =  '$name',`fname` =  '$fname',`mname` =  '$mname',`gender` =  '$gender',`dob` =  '$dob',`email` =  '$email',`password` =  '$password',`mobile` =  '$mobile',`category` =  '$cateory',`address` =  '$address',`city` =  '$city',`pin` =  '$pin',`aadhar` =  '$aadhar',`national` =  '$nationality',`dharm` =  '$dharm' WHERE acount_no='$id'";
mysqli_query($con,$query);

$query2="UPDATE  `banking`.`tbl_acount` SET  `name` =  '$name',`dob` =  '$dob',`email` =  '$email' WHERE  `tbl_acount`.`acc_no` ='$id'";
mysqli_query($con,$query2);

header("Location:vcandidate.php");
?>