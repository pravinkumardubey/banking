<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
include("connection.php");
$id=$_REQUEST['id'];
$query="SELECT * 
FROM  `tbl_candidate`where acount_no='$id'";
$res=mysqli_query($con,$query);
while($row=mysql_fetch_array($res))
{
?>
<body>

<form action="update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="hidden" value="<?php echo $id;?>"/>
name:<input type="text" name="name" value="<?php echo $row['name'];?>"><br/>
fname:<input type="text" name="fname" value="<?php echo $row['fname'];?>"><br/>
mname:<input type="text" name="mname" value="<?php echo $row['mname'];?>"><br/>
gender:<input type="radio" name="a" value="male" <?php if($row['gender']=='male'){ ?> checked <?php } ?>
>male
<input type="radio" name="a" value="female" <?php if($row['gender']=='female'){ ?> checked <?php } ?>
>female
<br/>
dob:<input type="date" name="dob" value="<?php echo $row['dob'];?>"/><br/>
email:<input type="email" name="email" value="<?php echo $row['email'];?>"/><br/>
password:<input type="password" name="password" value="<?php echo $row['password'];?>"/><br/>
mobile:<input type="number" name="mobile" value="<?php echo $row['mobile'];?>"/><br/>
catogry:<select name="select">
<option><?php echo $row['category'];?></option>
<option>General</option>
<option>Obc</option>
<option>Sc/St</option>

</select><br/>
address:<input type="text" name="add" value="<?php echo $row['address'];?>"/><br/>
city:<input type="text" name="city" value="<?php echo $row['city'];?>"/><br/>
pin:<input type="text" name="pin" value="<?php echo $row['pin'];?>"/><br/>
aadhar:<input type="text" name="aadhar" value="<?php echo $row['aadhar'];?>"/><br/>
dharm:<select name="dharm">
<option><?php echo $row['dharm'];?></option>
<option><?php if($row['dharm']=='Hindu') echo "Other"; else echo "Hindu";?></option>

</select><br/>
nationality:<select name="nationality">
<option><?php echo $row['national'];?></option>
<option><?php if($row['national']=='Bharatiy') echo "Other"; else echo "Bharatiy";?></option>

</select><br/>
<input type="submit" value="update"/>
</form>
<br/>
</body>
<?php
}
?>