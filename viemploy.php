<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$query="SELECT * 
FROM  `tbl_employ`";
$res=mysqli_query($con,$query);
?>
<body bgcolor="fghjnljljlesdrftgyujh">
<table align="center" border="1">
<tr>
<th>SI NO</th>
<th>NAME</th>
<th>FNAME</th>
<th>MNAME</th>
<th>GENDER</th>
<th>DOB</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>MOBILE</th>
<th>CATEGORY</th>
<th>FILE</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>PIN</th>
<th>AADHAR</th>
<th>NATIONALITY</th>
<th>DHARM</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<th><?php echo $a;?></th>
<th><?php echo $row['name'];?></th>
<th><?php echo $row['fname'];?></th>
<th><?php echo $row['mname'];?></th>
<th><?php echo $row['gender'];?></th>
<th><?php echo $row['date'];?></th>
<th><?php echo $row['email'];?></th>
<th><?php echo $row['password'];?></th>
<th><?php echo $row['mobile'];?></th>
<th><?php echo $row['category'];?></th>
<th><img src="upload/<?php echo $row['file'];?>"style="height:100px;width:100px;"></th>
<th><?php echo $row['address'];?></th>
<th><?php echo $row['city'];?></th>
<th><?php echo $row['pin'];?></th>
<th><?php echo $row['aadhar'];?></th>
<th><?php echo $row['national'];?></th>
<th><?php echo $row['dharm'];?></th>
<th><a href="edit.php?id=<?php echo $row['id'];?>">edit</a></th>
<th><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></th>
</tr>
<?php
$a++;
}
?>
</table>
</body>