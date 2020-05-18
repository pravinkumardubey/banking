
<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
include("../connection.php");
$email=$_SESSION['candidate'];
$query2="SELECT * 
FROM  `tbl_candidate` where email='$email'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);
$h=$row2['acount_no'];
$query3="SELECT * 
FROM  `tbl_lone`where acc_no='$h' ORDER BY  `tbl_lone`.`id` desc ";
$res3=mysqli_query($con,$query3);
?>
<body  style="background:linear-gradient(to right,red,yellow);">
<table align="center" border="1">
<tr>
<th>ACC.NO</th>
<th>NAME</th>
<th>DOB</th>
<th>AMOUNT</th>
<th>DATE</th>
<th>TIME</th>
<th>STATUS</th>
<tr>
<?php
while($row3=mysqli_fetch_array($res3))
{
?>

<tr>
<th><?php echo "2502000101428500".$row3['acc_no'];?></th>
<th><?php echo $row3['name'];?></th>
<th><?php echo $row3['dob'];?></th>
<th><?php echo $row3['amount'];?></th>
<th><?php echo $row3['date'];?></th>
<th><?php echo $row3['time'];?></th>
<th><?php if($row3['status']=='N') echo "Disapprove"; else echo "Approve";?></th>
</tr>
<?php
}
?>
</table>
</body>