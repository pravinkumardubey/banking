<?php

include("connection.php");
$id=$_REQUEST['id'];
$query="DELETE FROM  `banking`.`tbl_employ` WHERE  `tbl_employ`.`id`='$id'";
mysqli_query($con,$query);
header("Location:viemploy.php");
?>