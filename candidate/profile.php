<?php
include("../connection.php");
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
$email=$_SESSION['candidate'];
$query="select * from tbl_candidate where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
	$v=$row['name'];
	$f=$row['file'];
	$p=$row['gender'];
}
?>
<!DOCTYPE html>
<html>
<scrip>
</script>
<title>Hello. <?php echo $v;?></title>
<body>

</audio>
<head>
<style>
#menu
{
  height:calc(100vh - 115px);
  width:200px;
  background-color:#ff8080;
  float:left;border-right: 5px solid black;
}
#menu ul
{
	list-style:none;	
	
}
#menu ul li
{
	background-color:rgba(0,0,0,0.3);
	border:1px solid white;
	//margin-left:-40px;
	margin-top:38px;
	height:35px;
	box-shadow:0.1px 0.1px 40px white;
	text-align:center;
	background:#fe3798;
	line-height:35px;
}
#menu ul li a
{
	text-decoration:none;
	color:white;
	font-family:calibri;
	display:block;
	transition: 1s;
}
#menu ul li a:hover
{
	background-color:brown;
	color: #ff8000;box-shadow:5px 5px 15px black;
}
@keyframes aa{
	0%{color:#20ffff;}
	25%{color:#00ff00;}
	50%{color:#00ff00;}
	100%{color:#bf55bc;}
}
#as > a:hover{
	border-bottom: 1px solid brown;color: brown;
}
*{
	margin: 0;padding: 0;
}
</style>
</head>
<div  style="height:calc(100vh - 10px);width:calc(100% - 10px);border:5px solid black;background: #ff8080;">
<div style="height:100px;width:100%;background:#fe3798;border-bottom: 5px solid black;">
<a href="http://localhost/banking/upload/<?php echo $f ?>"target="_blank"><div><div style="height:100px;width:200px;background-color:#fe3798;float:left;" title="<?php echo $v;?>">
<img src="../upload/<?php echo $f ?>" style="height:120px;width:200px;background-color:#fe1b2d;border-right: 5px solid black;position: relative;border-bottom: 5px solid black;">
<div style="height:120px;width:200px;background:url(../frame/19.png);position: relative;top:-129px;background-size: 100% 100%;"></div>
</div></div></a>
<div style="height:100px;width:1145px;background-color:#fe3798;float:right">
<center></br><h1 style="text-transform: capitalize;color: blue;font-family: sans-serif;">Hello <?php if($p=='male') echo "Mr."; else echo "Mrs."; ?> <span style="animation: aa 1s linear infinite;transition: 1s;"> <?php echo $v;?></span><br/></h1></center>

</div>

</div>
<div id="menu">
<ul>
<li><a href="dashboard.php">DASHBOARD</a></li>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="inquery.php">BALENCE ENQUERY</a></li>
<li><a href="cash.php">CASH WITH DRAWAL</a></li>
<li><a href="credit.php">CREDIT AMOUNT</a></li>
<li><a href="lone.php">CANDIDATE BORROW LOAN</a></li>
<li><a href="fixdeposit.php">CANDIDATE FIX DEPOSIT</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div>
<br/><br/><br/>
<center>
<div id="pra" style="height:100px;width:300px;background:linear-gradient(45deg,red,#fff);margin:0px auto;border:5px solid;box-shadow: 0 0 30px #2ecc71;border-radius: 20px;border-color: #f1c40f #e74c3c #9b59b6 #2ecc71;"><br/>
	<div id="as">
<a href="view.php" style="text-decoration:none;">Show All Deta</a><br>
<a href="password.php" style="text-decoration:none;">Change Password</a><br/>
<a href="logout.php" style="text-decoration:none;">Logout</a>
</div></div>
</center>
</div>
</div>
</body>