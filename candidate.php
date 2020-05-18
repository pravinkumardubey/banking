<?php
error_reporting(0);
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
$m=$_REQUEST['m'];
?>
<DOCTYPE html>
<html>
<head>
<style>
#menu
{
  height:calc(100vh - 115px);
  width:200px;
  background-color:pink;
  float:left;border-right: 5px solid black;
  
}
#menu ul
{
	list-style:none;
	
}
#menu ul li
{
	background-color:#fe3798;
	border:1px solid white;
	//margin-left:-40px;
	margin-top:31px;
	height:35px;
	text-align:center;
	line-height:35px;
	
	
}
#menu ul li a
{
	text-decoration:none;
	color:white;
	background:#fe3798;
	font-family:calibri;
	display:block;
	
}
#menu ul li a:hover
{
	background-color:brown;
	box-shadow:1px 1px 10px #000;
	transition: 1s;
}
@keyframes a{
	0%{
		background-position: 0px;
	}
	100%{
		background-position: 550px;
	}
}
	input:focus, textarea:focus{
	border:2px solid green;box-shadow:0 0 5px black;
}
input[type='radio']:checked + label{
	color: #20ffff;
}
@keyframes a{
	0%{color: #20ffff;}
	100%{color: tomato;}
}
*{
	margin: 0;padding: 0;
}
</style>
<script>
window.onload=function()
{
	document.getElementById("p").play();
}
</script>
</head>
<body>
<audio id="p" src="sound/Megh.mp3">
</audio>
<div  style="height:calc(100vh - 10px);width:calc(100% - 10px);border:5px solid black;background:#ff8080;">
<div style="height:100px;width:100%;background:#fe3798;;//line-height: 100px;">
<div style="height:100px;width:100px;float:left;">
<img src="images/p.png" style="height:100px;width:100px;">
</div>
<div style="height:100px;width:1245px;float:right;line-height: 70px;color: #20ffff;">
<h1 style="margin-left:380px;font-family: sans-serif;"><span style="animation: a 1s linear infinite;">CANDIDATE REGISTRATION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $todaydate=date("d-M-Y")?></h1>
</div>
</div>
<div style="height:5px;width:auto;background-color:black;">
</div>
<div id="menu">
<ul>
<li><a href="dashboard.php">DASHBOARD</a></li>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="imploy.php">EMPLOYEE REGISTRATION</a></li>
<li><a href="candidate.php">CANDIDATE REGISTRATION</a></li>
<li><a href="viemploy.php">VIEW ALL EMPLOYEE</a></li>
<li><a href="vcandidate.php">VIEW ALL CANDIDATE</a></li>
<li><a href="lone.php">CANDIDATE BORROW LOAN</a></li>
<li><a href="fixdeposit.php">CANDIDATE FIX DPOSIT</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div>
	
	<div style="color: #fff;position: absolute;top: 330px;left: 950px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==1) {
		echo "(---Please Enter a Valid Mobile No";
	}
	?>
</div>
<div>
	<div style="color: #fff;position: absolute;top: 470px;left: 220px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==2) {
		echo "Please Enter a Valid Pin No---)";
	}
	?>
</div>
<div style="color: #fff;position: absolute;top: 300px;left: 260px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==7) {
		echo "Minimum age 18---)";
	}
	?>
</div>
<div style="color: #fff;position: absolute;top: 470px;left: 950px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==3) {
		echo "(---Please Enter a Valid Aadhar No";
	}
	?>
</div>
<div style="color: #fff;position: absolute;top: 300px;left: 980px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==5) {
		echo "(---Email is Already Exist";
	}
	?>
</div>
<div style="color: #fff;position: absolute;top: 365px;left: 950px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==4) {
		echo "(---Please give 500 Amount";
	}
	?>
</div>
<div style="color: #fff;position: absolute;top: 545px;left: 200px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==6) {
		echo "Please Enter a valid captcha---)";
	}
	?>
</div>
<br/>
<div style="height:auto;width:600px;margin:0px auto;background:pink;border:5px solid blue;border-color: #f1c40f #e74c3c #9b59b6 #2ecc71;box-shadow:0.5px 0.5px 30px #9b59b6;">
<center><h1 style="color:brown;">Register Here...</h1></center>
<form action="c.php" method="post" enctype="multipart/form-data">
<table align="center" border="0">
<tr>
<th>Name:</th><th><input type="text" name="name" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
<th>FName:</th><th><input type="text" name="fname" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
</tr>
<tr>
<th>MName:</th><th><input type="text" name="mname" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
<th>Gender:</th><th><input id="pra" type="radio" name="a" value="male" required="true"><label for="pra">Male&nbsp;&nbsp;</label><input id="q" type="radio" name="a" value="female"><label for="q">Female</label></th>
</tr>
<tr>
<th>Dob:</th><th><input type="date" name="date" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
<th>Email:</th><th><input type="email" name="email" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Password:</th><th><input type="password" name="password" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
<th>Mobile:</th><th><input type="text" name="mobile" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Category:</th><th><input list="cat" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;" required><datalist id="cat" name="select" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;">
<option value="">--select--</option>
<option>General</option>
<option>Obc</option>
<option>Sc/St</option>
</datalist></th>
<th>Amount:</th><th><input type="number" name="am" placeholder="Min Amt is 500" minlength="3" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Occupation:</th><th><input list="occ" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;" required><datalist id="occ" name="o" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;">
<option value="">--select--</option>
<option>Student</option>
<option>Farmer</option>
<option>Employ</option>
</datalist></th>
<th>File:</th><th><input type="file" id="file" name="file" required="true" accept="image/*" style="height:25px;width:170px;border-radius:20px;display: none;">
<label for="file" style="height: 30px;width: 200px;background: pink;"><div style="background:transparent;outline:none;background:pink;;height:30px;width:196px;line-height: 30px;color: #fff;cursor: pointer;border:2px solid;">Take a Pic</div></label>
</th>
</tr>
<tr>
<th>Address:</th><th><textarea name="address" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></textarea></th>
<th>City:</th><th><input type="text" name="city" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Pin:</th><th><input type="number" name="pin" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
<th>Aadhar:</th><th><input type="number" name="aadhar" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Nationality:</th><th><select name="national" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;">
<option value="">--select--</option>
<option selected>Bharatiy</option>
<option>InterNational</option>

</select>
</th>
<th>Dharm:</th><th><select name="dharm" required="true" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;">
<option value="">--select--</option>
<option selected>Hindu</option>
<option>Other</option>
</select>
</th>
</tr>
<tr>
	<th>What you see write here</th><th><input type="text" name="captcha" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;"></th><th></th><th><img src="a.php"></th>
</tr>
<tr>
<th colspan="4"><input type="submit" style="background:transparent;outline:none;background:pink;;height:30px;width:200px;cursor:pointer;"></th>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>