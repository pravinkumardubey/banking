<?php
include("connection.php");
$id=$_REQUEST['id'];
mysqli_query($con,"INSERT INTO `banking`.`tbl_warring` (`id`, `user_id`, `date`, `time`) VALUES (NULL, '$id', curdate(), curtime())");
header("Location:vcandidate.php");
?>