<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
$id=$_REQUEST['id'];
$query="DELETE FROM `banking`.`tbl_lone` WHERE `tbl_lone`.`id` = '$id'";
mysqli_query($con,$query);
?>