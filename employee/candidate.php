<?php
session_start();
if ($_SESSION['employee']=='') {
	session_destroy();
	header("Location:../index.php");
}
?>
<body>
<head>
<style>
#menu
{
  height:auto;
  width:200px;
  background-color:#F96156;
  float:left;
  
}
#menu ul
{
	list-style:none;
	
}
#menu ul li
{
	background-color:#F9375;
	border:1px solid white;
	margin-left:-40px;
	margin-top:35.5px;
	height:35px;
	text-align:center;
	line-height:35px;
	
	
}
#menu ul li a
{
	text-decoration:none;
	color:white;
	background:linear-gradient(to right,red,yellow);
	font-family:calibri;
	display:block;
	
}
#menu ul li a:hover
{
	background-color:blue;
	box-shadow:0.5px 0.5px 50px white;
	
}

</style>
</head>
<div  style="height:630px;width:1345px;border:5px solid green;background:linear-gradient(to right, #F56217, #0B486B);">
<div style="height:100px;width:1345px;background-color:yellow;">
<div style="height:100px;width:100px;background-color:yellow;float:left;">
<img src="../images/p.png" style="height:100px;width:100px;">
</div>
<div style="height:100px;width:1245px;background-color:yellow;float:right"><br/>
<h1 style="margin-left:420px;">CANDIDATE REGISTATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="blue"><?php echo $todaydate=date("d-M-Y")?></font></h1>
</div>
</div>
<div style="height:5px;width:auto;background-color:green;">
</div>
<div id="menu">
<ul>
<li><a href="dashboard.php">DASHBOARD</a></li>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="candidate.php">CANDEDATE REGISTATION</a></li>
<li><a href="../vcandidate.php">VIEW ALL CANDEDATE</a></li>
<li><a href="lone.php">CANDEDATE BARROW LONE</a></li>
<li><a href="../fixdeposit.php">CANDEDATE FIX DPOGIT</a></li>
<li><a href="../logout.php">LOGOUT</a></li>
</ul>
</div>
<div>
<div style="height:auto;width:500px;margin:0px auto;background:linear-gradient(to left,#F56217,#0B486b);//border:5px solid;box-shadow:0.5px 0.5px 50px white;border-radius:50px 50px 50px 50px;">
<center><h1>Register Here!!!</h1></center>
<form action="c.php" method="post" enctype="multipart/form-data">
<table align="center" border="0">
<tr>
<th>Name:</th><th><input type="text" name="name" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
<th>FName:</th><th><input type="text" name="fname" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>MName:</th><th><input type="text" name="mname" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
<th>Gender:</th><th><input type="radio" name="a" value="male" required="true">Male<input type="radio" name="a" value="female">Female</th>
</tr>
<tr>
<th>Dob:</th><th><input type="date" name="date" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
<th>Email:</th><th><input type="email" name="email" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>Password:</th><th><input type="password" name="password" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
<th>Mobile:</th><th><input type="text" name="mobile" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>Category:</th><th><select name="select" required="true" style="height:25px;width:170px;border-radius:20px;">
<option value="">--select--</option>
<option>General</option>
<option>Obc</option>
<option>Sc/St</option>
</select></th>
<th>Amount:</th><th><input type="number" name="am" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>Occupation:</th><th><select name="o" required="true" style="height:25px;width:170px;border-radius:20px;">
<option value="">--select--</option>
<option>Student</option>
<option>Farmer</option>
<option>Employ</option>
</select></th>
<th>File:</th><th><input type="file" name="file" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>Address:</th><th><textarea name="address" required="true" style="height:25px;width:170px;border-radius:20px;"></textarea></th>
<th>City:</th><th><input type="text" name="city" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>Pin:</th><th><input type="number" name="pin" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
<th>Aadhar:</th><th><input type="number" name="aadhar" required="true" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
<tr>
<th>Nationality:</th><th><select name="national" required="true" style="height:25px;width:170px;border-radius:20px;">
<option value="">--select--</option>
<option>Bharatiy</option>
<option>InterNational</option>

</select>
</th>
<th>Dharm:</th><th><select name="dharm" required="true" style="height:25px;width:170px;border-radius:20px;">
<option value="">--select--</option>
<option>Hindu</option>
<option>Other</option>
</select>
</th>
</tr>
<tr>
<th colspan="4"><input type="submit" style="height:25px;width:170px;border-radius:20px;"></th>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>