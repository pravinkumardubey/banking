<?php
error_reporting(0);
 $ip=$_SERVER['REMOTE_ADDR'];
 $host=$_SERVER['HTTP_HOST'];
 $server=$_SERVER['SERVER_NAME'];
include("../connection.php");
session_start();
if (isset($_SESSION['candidate'])) {
$email=$_SESSION['candidate'];
$query="select * from tbl_candidate where email='$email'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
	$v=$row['name'];
	$un=$row['unauthorize'];
}

$query2="UPDATE  `banking`.`tbl_candidate` SET  `ip_address` =  '$ip',`host` =  '$host',`server` =  '$server' WHERE  `tbl_candidate`.`email` ='$email'";
mysqli_query($con,$query2);



?>
<head>
<script>	
var audioEi=document.createElement('audio');
var canPlayAudio=!!(a.canPlayType&&a.canPlayType('audio/mpeg;').replace(/no/,"));
$(document).redy(function(){ $('slideshow').cycle('pause');});
}
}
</script><title>Welcome. <?php echo $v;?></title>
<script>
var arr=["ad.jpg","1.jpg","2.jpg","3.jpg"];
var i=0;
function golu()
{
	var slider=document.getElementById("img");
	slider.src="../images/"+arr[i];
	window.setTimeout("golu()",1000);
	i++;
	if(i==arr.length)
	{
		i=0;
	}
}
</script>
<style>
.team
{
	height:170px;
	width:170px;
	border:2px dotted white;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:100px;
	margin-top:100px;
	border-radius:50%;
	transition: 0.5s;
}
.team:hover{
	box-shadow:0.1px 0.1px 25px #fff;
	color: #ff8000;transform: scale(1.5);background:linear-gradient(to right, #fb0094,#0000ff,#00ff00,#ffff00,#ff0000,#fb0094,#0000ff,#00ff00,#ffff00,#ff0000);font-family: fantasy;text-transform: uppercase;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation: a 5s linear infinite;
}
@keyframes a{
	0%{
		background-position: 0px;
	}
	100%{
		background-position: 600px;
	}
}
h1:hover{
	letter-spacing: 5px;
}
@keyframes aa{
	0%{color:#20ffff;}
	25%{color:#00ff00;}
	50%{color:#00ff00;}
	100%{color:#bf55bc;}
}
*{
	margin: 0;padding: 0;
}
</style>
</head>
<body onload="golu()">
<audio autoplay loop>
<source src="../sound/aao mann ki.mp4"/>
</audio>
<div style="height:calc(100vh - 10px);width:calc(100% - 10px);background:#ff8080;border:5px solid black;">
<div style="height:100px;width:100%;background:#fe3798;//box-shadow: 0.5px 0.5px 35px #000;border-bottom: 5px solid black;">
<div style="height:100px;width:100px;//background-color:linear-gradient(to right, #F56217, #0B486B);float:left;">
<img src="../images/p.png" style="height:100px;width:100px;">
</div>
<center></br><h1 style="text-transform: capitalize;color: #20ffff;">Welcome.<span style="animation: aa 1s linear infinite;transition: 1s;"> <?php echo $v;?></span><br/></h1></center>
</div>
<div style="height:515px;width:250px;background:linear-gradient(to right, #F56217, #0B486B);float:left;">
<img id="img" style="height:calc(100vh - 115px);width:250px;border-right: 5px solid black;"> 
</div>
<div style="height:525px;width:auto; background-color:linear-gradient(to right, #F56217, #0B486B);">
<a href="profile.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Profile</div></a>
<a href="inquery.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Balence Enquire</div></a>
<a href="cash.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Cash with drawal</div></a>
<a href="credit.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Credit amount</div></a>
<br/>
<a href="lone.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Candidate Loan</div></a>
<a href="fixdeposit.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Candidate fix deposit</div></a>
<a href="Transfer.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Money Transfer</div></a>
<a href="../logout.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Logout</div></a>
</div><div style="height: 35px;width: 700px;//background: red;position: relative;top:-30px;left: 400px;color: #fff;line-height: 35px;text-align: center;">
	<?php
	if ($un=='1' or $un=='2' or $un=='3') {
		?>
		<span style="color: #20ffff;">Warrning</span>:<?php echo " You are Accessing Unauthorize $un time After Three Time Your Account will be close";?>
		<?php
	}
	 if ($un=='4') {
		echo "Your Account is Close";
		mysqli_query($con,"UPDATE  `banking`.`tbl_acount` SET  `block` =  'block' WHERE  `tbl_acount`.`email` ='$email'");
	}
	
	if ($un=='0') {
		echo " ";
	}
	?>
</div>
</div>
</div>
</body>
<?php
}
else{
	header("Location:../index.php");
}
?>