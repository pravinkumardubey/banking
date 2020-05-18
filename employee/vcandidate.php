<?php
session_start();
if($_SESSION['employee']=='')
{
session_destroy();
header("Location:index.php");
}
include("../connection.php");
$query="SELECT * 
FROM  `tbl_candidate` 
ORDER BY  `tbl_candidate`.`acount_no` ASC ";
$res=mysql_query($query);
?>
<style type="text/css">
	tr:nth-child(1){
	background: orange;
	}
	@keyframes a{
		0%{background: red;}
		50%{background: yellow;}
		100%{background: red;}
	}
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
	tr:nth-child(even)
	{
		background: #00ff00;color: blue;
	}
</style>
<body bgcolor="tomato">
<table align="center" border="1">
<tr>
<th>SI. NO</th>
<th>ACCOUNT NO</th>
<th>NAME</th>
<th>FNAME</th>
<th>MNAME</th>
<th>GENDER</th>
<th>DOB</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>MOBILE</th>
<th>CATEGORY</th>
<th>PHOTO</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>PIN</th>
<th>AADHAR</th>
<th>NATIONALITY</th>
<th>CAST</th>
<th>IP ADDRESS</th>
<th>SERVER</th>
<th>WARNING</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<span><th><?php echo $a; 
	 if ($row['unauthorize']==0) {
		echo " ";
	}
		else {
	?>
<div style="height: 10px;width: 10px;background: red;border:2.5px solid black;border-radius: 50%;margin-left: 5px;animation: a 0.5s linear infinite;"></div>
	<?php
}
?>
</th></span>
<th><?php echo "2502000101428".$row['acount_no'];?></th>
<th><?php echo $row['name'];?></th>
<th><?php echo $row['fname'];?></th>
<th><?php echo $row['mname'];?></th>
<th><?php echo $row['gender'];?></th>
<th><?php echo $row['dob'];?></th>
<th><?php echo $row['email'];?></th>
<th><?php echo $row['password'];?></th>
<th><?php echo $row['mobile'];?></th>
<th><?php echo $row['category'];?></th>
<th><img src="../upload/<?php echo $row['file'];?>"style="height:100px;width:100px;"></th>
<th><?php echo $row['address'];?></th>
<th><?php echo $row['city'];?></th>
<th><?php echo $row['pin'];?></th>
<th><?php echo $row['aadhar'];?></th>
<th><?php echo $row['national'];?></th>
<th><?php echo $row['dharm'];?></th>
<th><?php echo $row['ip_address'];?></th>
<th><?php echo $row['host'];?></th>
<th><a href="send.php?id=<?php echo $row['acount_no'];?>">warning</a></th>
<th><a href="edit.php?id=<?php echo $row['acount_no'];?>">edit</a></th>
<th><a href="deletec.php?id=<?php echo $row['acount_no'];?>">delete</a></th>
</tr>
<?php
$a++;
}
?>
</table>
</body>