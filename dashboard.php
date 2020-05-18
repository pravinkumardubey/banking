<?php
session_start();
if (isset($_SESSION['user'])) {
	
include("connection.php");
$query="select * from tbl_admin";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	$v=$row['name'];
}
?>
<!DOCTYPE html>
<html>
<script>
var arr=["ad.jpg","1.jpg","2.jpg","3.jpg"];
var i=0;
function golu()
{
	var slider=document.getElementById("img");
	slider.src="images/"+arr[i];
	window.setTimeout("golu()",1000);
	i++;
	if(i==arr.length)
	{
		i=0;
	}
}
</script>
	<link rel="shortcut icon" href="Images/p.png"><title>Welcome Admin</title>
<style>

.team
{
	height:170px;
	width:170px;
	border:2px dotted white;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:110px;
	margin-top:100px;
	border-radius:50%;
	box-shadow:0.1px 0.1px 15px green;
	transition: 1.5s;
	box-sizing: border-box;
}
.team:hover{
	box-shadow:0.1px 0.1px 35px #fff;
	color: #ff8000;animation: aa 5s linear infinite;
	transform: skew(-20deg) scale(1.5) rotate(360deg);
	background:linear-gradient(to right, #fb0094,#0000ff,#00ff00,#ffff00,#ff0000,#fb0094,#0000ff,#00ff00,#ffff00,#ff0000);font-family: fantasy;text-transform: uppercase;-webkit-background-clip:text;-webkit-text-fill-color:transparent;
}

h1:hover{
	letter-spacing: 5px;
}	
@keyframes a{
	0%{color:#20ffff;}
	50%{color:#00ff00;}
	100%{color:#bf55bc;}
}
@keyframes aa{
	0%{
		background-position: 0px;
	}
	100%{
		background-position: 600px;
	}
	}
	*{
		margin: 0;padding: 0;
	}
</style>
</head>
<body onload="golu()"><body onload="golu()">
<audio autoplay loop>
<source src="sound/p.mp3"/>
</audio>
<div style="height:calc(100vh - 10px);width:calc(100% - 10px);background:  #ff8080;border:5px solid blue;">
<div style="height:100px;width:100%;background: #fe3798;box-shadow: 0.5px 0.5px 35px #000;border-bottom: 5px solid blue;">
<div style="height:100px;width:100px;//background: linear-gradient(to right, #F56217, #ff8080);float:left;">
<img src="images/p.png" style="height:100px;width:100px;">
</div>
<center></br><h1 id="asd" style="text-transform: capitalize;color: #20ffff;">Welcome  <span style="animation: a 1s linear infinite;transition: 1s;text-shadow: 0 0 10px #000;"><?php echo $v;?></span></h1></center>

</div>
<div style="height:calc(100% - 105px);width:250px;background:  #ff8080;float:left;background-size:100% 100%;border-right: 5px solid blue;">
<img id="img" style="height:100%;width:250px;"> 
</div>
<div style="height:525px;width:auto;background: #ff8080;//border:5px solid blue;">
<a href="profile.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Profile</div></a>
<a href="imploy.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Employee Registration</div></a>
<a href="candidate.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Candidate Registration</div></a>
<a href="viemploy.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>View All Employee</div></a>
<br/>
<a href="vcandidate.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>View All Candidate</div></a>
<a href="lone.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Candidate Borrow Loan</div></a>
<a href="fixdeposit.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Candidate Fix Deposit</div></a>
<a href="logout.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Logout</div></a>
</div>
</div>
</div>
</body>
<?php
}
else{
	header("Location:index.php");
}
?>