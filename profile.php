<?php
include("connection.php");
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
$query="SELECT * 
FROM  `tbl_admin` ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{

?>
<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" href="Images/p.png"><title><?php echo ucfirst($row['name']);?></title>
<style>
#menu
{
  height:calc(100% - 132px);
  width:200px;border-top: 5px solid black;
  background-color:rgba(255,255,255,0.3);
  float:left;border-right: 5px solid black;
}
#menu ul
{
	list-style:none;
	
}
#menu ul li
{
	background:#fe3798;
	border:1px solid white;
	margin-top:27.5px;
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
#ad a:hover{
	border-bottom: 1px solid #e74c3c;color: #e74c3c;
}
input:focus{
	border:2px solid green;box-shadow:0 0 5px black;
}
span{
			animation: a 5s linear infinite;display: inline-block;opacity: 0;//animation-delay: 4s;
		}
		@keyframes a{
			0%{
				opacity: 5;transform: rotateY(90deg);color: #20ffff;
			}
			100%{
				opacity: 0;transform: rotateY(-90deg);color:#03a1e0;
			}
		}
		*{
			margin: 0;padding: 0;
		}
</style>
<script>
window.onload=function()
{
	document.getElementById("a").play();
}
</script>
</head>
<body>
<audio id="a" src="sound/aao mann ki.mp4">
</audio>
<div  style="height:calc(100vh - 10px);width:calc(100% - 10px);border:5px solid black;background: #ff8080;">
<div style="height:100px;width:100%;background:#fe3798;">
<div style="height:100px;width:100px;float:left;">
<img src="images/<?php echo $row['file']; ?>" style="height:130px;width:200px;border-right: 5px solid black;">
</div>
<div><a href="http://localhost/banking/upload/<?php echo $row['file']; ?>"target="_blank"  title="<?php echo $row['name'];?>">
<div style="height: 130px;width:200px;position: absolute;background: url(frame/19.png);background-size: 100% 100%;"></div><div style="height: 130px;width: 5px;background: black;position: relative;left: 200px;"></div></a></div>
<div style="height:100px;width:1000px;float:right;color: #20ffff;line-height: 100px;font-size: 2em;//text-align: center;font-family: sans-serif;padding: 0;margin: 0;//background: red;position: relative;top:-130px;//left: 00px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Hello Mr.<span> <?php echo ucfirst($row['name']);?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $todaydate=date("d-M-Y")?>
</div>
<?php } ?>
</div>
<div style="height:5px;width:auto;background-color:black;">
</div>

<div id="menu">
<ul>
<li><a href="dashboard.php">DASHBOARD</a></li>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="imploy.php">EMPLOYEE REGISTATION</a></li>
<li><a href="candidate.php">CANDEDATE REGISTATION</a></li>
<li><a href="viemploy.php">VIEW ALL EMPLOYEE</a></li>
<li><a href="vcandidate.php">VIEW ALL CANDEDATE</a></li>
<li><a href="lone.php">CANDEDATE BARROW LOAN</a></li>
<li><a href="fixdeposit.php">CANDEDATE FIX DPOGIT</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div>
<br/><br/><br/><br/>
<center>
<div style="height:100px;width:300px;background:pink;border:5px solid blue;border-color: #f1c40f #e74c3c #9b59b6 #2ecc71;margin-top: 20px;border-radius: 20px;">
	<div id="ad">
<a href="view.php" style="text-decoration:none;">Show All Deta</a><br>
<a href="password.php" style="text-decoration:none;">Change Password</a><br/>
<a href="logout.php" style="text-decoration:none;">Logout</a>
</div></div>
</center>
</div>
</div>
</body>