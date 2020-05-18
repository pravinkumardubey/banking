<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$query2="SELECT * 
FROM  `tbl_lone`ORDER BY  `tbl_lone`.`id` desc ";
$res2=mysqli_query($con,$query2)
?>
<style type="text/css">
table{
	border:5px solid blue;
}
tr{
	background: #20ffff;
}
	tr:nth-child(1)
	{
		background: yellow;color: blue;
	}
</style>
<body  style="background:tomato;">
<table align="center" border="1">
<tr>
<th>ACC.NO</th>
<th>NAME</th>
<th>DOB</th>
<th>AMOUNT</th>
<th>DATE</th>
<th>TIME</th>
<th>STATUS</th>
<th>CONFORM</th>
<tr>
<?php
while($row2=mysqli_fetch_array($res2))
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
<th><a href="ss.php?id=<?php echo $row2['id'];?>" target="_parent">change status</a></th>
</tr>
<?php
}
?>
</table>
</body>