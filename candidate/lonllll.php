<?php
include("../connection.php");
session_start();

$select=$_POST['select'];
$ac=$_POST['acc'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$amo=$_POST['amo'];
$h=$ac-2502000101428500;


$email=$_SESSION['candidate'];
$query3="SELECT * 
FROM  `tbl_candidate` where email='$email'";
$res3=mysqli_query($con,$query3);
$row3=mysqli_fetch_array($res3);
$g=$row3['acount_no'];
$na=$row3['name'];
$do=$row3['dob'];

$query2="SELECT * 
FROM  `tbl_lone` where acc_no='$h'";
$res2=mysqli_query($con,$query2);
$count=mysqli_num_rows($res2);
$a=date("H:i:s");
$b=date("06:30:00");
$c=strtotime($a)-strtotime($b);
$d=gmdate("H:i:s",$c);
if($select=='Borrow Lone')
{
	if($g!=="$h" or $name!=="$na" or $dob!=="$do")
	{
		header("Location:lone.php?msg=5");
	}
else if($count!=0)
	{
		header("Location:lone.php?msg=1");
		
	}


else
{
$query="INSERT INTO `banking`.`tbl_lone` (`id`, `acc_no`, `name`, `dob`, `amount`, `date`, `time`,status) VALUES (NULL, '$h', '$name', '$dob', '$amo', curdate(), '$d','N')";
mysqli_query($con,$query);
header("Location:l.php");
}
}

$query5="SELECT * FROM  `tbl_lone` where acc_no='$h'";
$res5=mysqli_query($con,$query5);
$count2=mysqli_num_rows($res5);
if($row5=mysqli_fetch_array($res5))
{
	$status=$row5['status'];
	$amount=$row5['amount'];
}

if($select=='Pey Lone')
{
	if($g!=="$h" or $name!=="$na" or $dob!=="$do")
	{
		header("Location:lone.php?msg=5");
	}
	
	else if($count=="0" or $status=="N")
	{
		header("Location:lone.php?msg=3");
	
	}
	
	else if($amo!=$amount)
	{
		header("Location:lone.php?msg=$amount");
	}
	else
	{

		$query4="DELETE FROM `banking`.`tbl_lone` WHERE acc_no = '$h'";
		mysqli_query($con,$query4);
		echo "<center><h1><font color=red><font size=3em>THANK YOU.!!!";
	}
	}
?>