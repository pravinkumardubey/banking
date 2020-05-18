<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
$today=date("Y-m-d");
include("connection.php");
$query="SELECT * 
FROM  `tbl_fix` where (date_to='$today' || date_to <'$today') ORDER BY  `tbl_fix`.`id` ASC";
$res=mysqli_query($con,$query);
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
<body bgcolor="tomato">
<table align="center" border="1">
<tr>
<th>SI.NO</th>
<th>ACCOUNT NO.</th>
<th>NAME</th>
<th>FNAME</th>
<th>DOB</th>
<th>AMOUNT</th>
<th>DATE</th>
<th>DATE TO</th>
<th>STATUS</th>
<th>PAID</th>
</tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<th><?php echo $a;?></th>
<th><?php echo "2502000101428".$row['acc_no'];?></th>
<th><?php echo $row['name'];?></th>
<th><?php echo $row['fname'];?></th>
<th><?php echo $row['dob'];?></th>
<th><?php echo $row['amount'];?></th>
<th><?php echo $row['date'];?></th>
<th><?php echo $row['date_to'];?></th>
<th><?php if($row['status']=='N') echo "<font color=red>pending</font>"; else echo "<font color=green>paid</font>";?></th>
<th><a href="paid.php?id=<?php echo $row['id'];?>">change status</a></th>
<?php
$a++;
}
?>
</tr>
</table>
</body>