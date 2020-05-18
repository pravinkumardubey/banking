<?php
session_start();
if ($_SESSION['employee']=='') {
	session_destroy();
	header("Location:../index.php");
}
?>
<DOCTYPE html>
<html>
<head>
<script>
window.onload=function()
{
	document.getElementById("g").play();
}
</script>
<style>
#menu
{
  height:auto;
  width:200px;
  background-color:rgba(255,255,255,0.3);
  float:left;
}
#menu ul
{
	list-style:none;
	
}
#menu ul li
{
	background:linear-gradient(to right,yellow,red);
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
	font-family:calibri;
	display:block;
}
#menu ul li a:hover
{
	background-color:green;
	box-shadow:0.5px 0.5px 40px white;
}

</style>
</head>
<body>
<audio id="g" src="../sound/yashomati.mp3"></audio>
<div  style="height:630px;width:1345px;border:5px solid green;background:linear-gradient(to right, #F56217, #0B486B);">
<div style="height:100px;width:1345px;background-color:yellow;">
<div style="height:100px;width:100px;background-color:yellow;float:left;">
<img src="../images/p.png" style="height:100px;width:100px;">
</div>
<div style="height:100px;width:1245px;background-color:yellow;float:right"><br/>
<h1 style="margin-left:420px;">WELCOME EMPLOYEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="blue"><?php echo $todaydate=date("d-M-Y")?></font></h1>
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
<br/>
<center>
<div style="height:100px;width:300px;background:linear-gradient(to right,yellow,red);margin:0px auto;border:5px solid green;//float:right;"><br/>
<a href="view.php" style="text-decoration:none;">Show All Deta</a><br>
<a href="password.php" style="text-decoration:none;">Change Password</a><br/>
<a href="../logout.php" style="text-decoration:none;">Logout</a>
</div>
</center>
</div>
</div>
</body>
</html>