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
<script>
window.onload=function()
{
	document.getElementById("a").play();
}
</script>
<style>
#menu
{
  height:calc(100vh - 115px);
  width:200px;
  background-color:pink;
  float:left;border-right:5px solid black;
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
	margin-top:30.5px;
	height:35px;
	text-align:center;
	line-height:35px;
}
#menu ul li a
{
	text-decoration:none;
	color:white;
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
input:focus{
	border:2px solid green;box-shadow:0 0 5px black;
}
input[type=radio]:checked + label{
	color: red;
}
@keyframes a{
	0%{color: #20ffff;}
	100%{color: tomato;}
}
*{
	margin: 0;padding: 0;
}
</style>
</head>
<body>
<audio id="a" src="sound/yashomati.mp3" loop></audio>
<div  style="height:calc(100vh - 10px);width:calc(100% - 10px);border:5px solid black;background:#ff8080;">
<div style="height:100px;width:100%;background:#fe3798;">
<div style="height:100px;width:100px;//background-color:#ccc;float:left;">
<img src="images/p.png" style="height:100px;width:100px;">
</div>
<div style="height:100px;width:1245px;//background-color:#ccc;float:right;line-height: 100px;">
<h1 style="margin-left:350px;color: #20ffff;font-family: sans-serif;"><span style="animation: a 1s linear infinite;">EMPLOYEE REGISTRATION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $todaydate=date("d-M-Y")?></h1>
</div>
</div>
<div style="height:5px;width:auto;background-color:black;">
</div>
<div id="menu">
<ul>
<li><a href="dashboard.php">DASHBOARD</a></li>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="imploy.php">EMPLOYEE REGISTRATION</a></li>
<li><a href="candidate.php">CANDEDATE REGISTRATION</a></li>
<li><a href="viemploy.php">VIEW ALL EMPLOYEE</a></li>
<li><a href="vcandidate.php">VIEW ALL CANDIDATE</a></li>
<li><a href="lone.php">CANDIDATE BORROW LOAN</a></li>
<li><a href="fixdeposit.php">CANDIDATE FIX DEPOSIT</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div>
	<div style="color: #fff;position: absolute;top: 350px;left: 950px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==1) {
		echo "(---Please Enter a Valid Mobile No";
	}
	?>
</div>
<div>
	<div style="color: #fff;position: absolute;top: 455px;left: 220px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==2) {
		echo "Please Enter a Valid Pin No---)";
	}
	?>
</div>
<div style="color: #fff;position: absolute;top: 455px;left: 950px;background: linear-gradient(to right,#fb0094,#80ffff,#00ff00,#ffff00,#ff0000,#ff0000);-webkit-background-clip: text;-webkit-text-fill-color:transparent;animation: a 2s linear infinite;">
	<?php
	if ($m==3) {
		echo "(---Please Enter a Valid Aadhar No";
	}
	?>
</div>
<br/>
<br/>
<div style="height:auto;width:600px;margin:0px auto;background:pink;box-shadow:0.5px 0.5px 30px #9b59b6;border:5px solid;border-color: #f1c40f #e74c3c #9b59b6 #2ecc71;">
<center><h1 style="color:brown;">Register Here...</h1></center>
<form action="i.php" method="post" enctype="multipart/form-data">
<table align="center" border="0">
<tr>
<th>Name:</th><th><input type="text" required="true" name="name" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
<th>FName:</th><th><input type="text" required="true" name="fname" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
</tr>
<tr>
<th>MName:</th><th><input type="text" required="true" name="mname" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
<th>Gender:</th><th><input id="pra" type="radio" required="true" name="a" value="male"><label for="pra">Male</label><input id="q" type="radio" name="a" value="female"><label for="q">Female</label></th>
</tr>
<tr>
<th>Dob:</th><th><input type="date" required="true" name="date" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
<th>Email:</th><th><input type="email" required="true" name="email" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Password:</th><th><input type="password" required="true" name="password" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
<th>Mobile:</th><th><input type="text" name="mobile" required="true" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Category:</th><th><select name="select" required="true" style="background:transparent;outline:none;background:pink;height:30px;width:200px;">
<option value="">--select--</option>
<option>General</option>
<option>Obc</option>
<option>Sc/St</option>
</select></th>
<th>File:</th><th><input type="file" id="file" name="file" required="true" accept="image/*" style="height:25px;width:170px;border-radius:20px;display: none;">
<label for="file" style="height: 30px;width: 200px;text-align: center;"><div style="background:transparent;outline:none;border:2px solid;background:pink;height:30px;width:200px;line-height: 30px;color: #fff;cursor: pointer;">Take a Pic</div></label>
</th>
</tr>
<tr>
<th>Address:</th><th><textarea name="address" required="true" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></textarea></th>
<th>City:</th><th><input type="text" required="true" name="city" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Pin:</th><th><input type="text" required="true" name="pin" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
<th>Aadhar:</th><th><input type="number" required="true" name="aadhar" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
</tr>
<tr>
<th>Nationality:</th><th><select name="national" required="true" style="background:transparent;outline:none;background:pink;height:30px;width:200px;">
<option value="">--select--</option>
<option>Bharatiy</option>
<option>InterNational</option>

</select>
</th>
<th>Dharm:</th><th><select name="dharm" required="true" style="background:transparent;outline:none;background:pink;height:30px;width:200px;">
<option value="">--select--</option>
<option>Hindu</option>
<option>Other</option>
</select>
</th>
</tr>
<tr>
<th colspan="4"><input type="submit" style="background:transparent;outline:none;background:pink;height:30px;width:200px;"></th>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>