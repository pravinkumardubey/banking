<?php
session_start();
if ($_SESSION['employee']=='') {
	session_destroy();
	header("Location:../index.php");
}
include("../connection.php");
$query2="SELECT * 
FROM  `tbl_lone`ORDER BY  `tbl_lone`.`id` desc ";
$res2=mysql_query($query2)
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
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>

<tr>
<th><?php echo "2502000101428".$row2['acc_no'];?></th>
<th><?php echo $row2['name'];?></th>
<th><?php echo $row2['dob'];?></th>
<th><?php echo $row2['amount'];?></th>
<th><?php echo $row2['date'];?></th>
<th><?php echo $row2['time'];?></th>
<th><?php if($row2['status']=='N') echo "<font color=red>Disapprove</font>"; else echo "<font color=green>Approve</font>";?></th>
</tr>
<?php
}
?>
</table>
</body>