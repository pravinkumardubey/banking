<?php

include("connection.php");
echo $id=$_REQUEST['id'];
$query="DELETE FROM  `banking`.`tbl_candidate` WHERE  `tbl_candidate`.`acount_no`='$id'";
mysqli_query($con,$query);

$query2="DELETE FROM  `banking`.`tbl_acount` WHERE  `tbl_acount`.`acc_no`='$id'";
mysqli_query($con,$query2);

$query3="DELETE FROM  `banking`.`tbl_fix` WHERE  `tbl_fix`.`acc_no`='$id'";
mysqli_query($con,$query3);

$query4="DELETE FROM  `banking`.`tbl_lone` WHERE  `tbl_lone`.`acc_no`='$id'";
mysqli_query($con,$query4);

header("Location:vcandidate.php");
?>