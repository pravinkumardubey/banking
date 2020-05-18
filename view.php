<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$query="SELECT * 
FROM  `tbl_admin` ";
$res=mysqli_query($con,$query);
?>
<body bgcolor="orange">
<div style="height:auto;width:540px;background:#fff;margin:100px auto;border:30px solid;padding:10px;border-image-source:url(Images/ff.jpg);border-image-repeat:round;border-image-slice: 22;">
<table align="center" border="1">
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>FILE</th>
<th>DATE</th>
</tr>
<?php
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<th><?php echo $row['id'];?></th>
<th><?php echo $row['name'];?></th>
<th><?php echo $row['email'];?></th>
<th><?php echo $row['password'];?></th>
<th><img src="upload/<?php echo $row['file'];?>" style="height:100px;width:100px;"></th>
<th><?php echo $row['date'];?></th>
</tr>
<?php
}
?>
</table>
</div>
</body>