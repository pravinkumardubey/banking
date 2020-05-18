<?php
session_start();
if (isset($_SESSION['employee'])) {
	
?>
<head>
<script>

<!DOCTYPE html>
<html>
<script>
	
var audioEi=document.createElement('audio');
var canPlayAudio=!!(a.canPlayType&&a.canPlayType('audio/mpeg;').replace(/no/,"));
$(document).redy(function(){ $('slideshow').cycle('pause');});
}
}
</script>

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
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.1px 0.1px 15px green;
}
.team1
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	.team2
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	.team3
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	.team4
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	.team5
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	.team6
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	.team7
{
	height:170px;
	width:170px;
	border:2px dotted green;
	float:left;
	background-color:rgba(255,255,255,0.6);
	margin-left:130px;
	margin-top:50px;
	border-radius:50%;
	box-shadow:0.5px 0.5px 15px green;
}

	
	
</style>
</head>
<body onload="golu()"><body onload="golu()">
<audio autoplay loop>
<source src="../sound/g.mp3"/>
</audio>

<div style="height:630px;width:1340px;background:red;border:5px solid blue;">
<div style="height:100px;width:1340px;background:pink;//border:5px solid blue;">
<div style="height:100px;width:100px;background-color:pink;float:left;">
<img src="../images/p.png" style="height:100px;width:100px;">
</div>
<center></br><h1>DASHBOARD</h1></center>

</div>
<div style="height:5px;width:1340px;background:blue;//border:5px solid blue;">
</div>
<div style="height:515px green;width:250px;background:blue;float:left;box-shadow:0.5px 0.5px 35px yellow;//background-image:url('../images/ad.jpg');background-size:100% 100%;">
<img id="img" style="height:525px;width:250px;"> 
</div>
<div style="height:525px;width:auto; background-color:rgba(255,0,0,0.6);//border:5px solid blue;">
<a href="profile.php"><div class="team" style="text-align:center;"><br/><br/><br/><br/>Profile</div></a>
<a href="candidate.php"><div class="team2" style="text-align:center;"><br/><br/><br/><br/>Candidate Registation</div></a>
<a href="vcandidate.php"><div class="team4" style="text-align:center;"><br/><br/><br/><br/>View All Candidate</div></a>
<a href="lone.php"><div class="team5" style="text-align:center;"><br/><br/><br/><br/>Candidate Borrow Loan</div></a>
<a href="../fixdeposit.php"><div class="team6" style="text-align:center;"><br/><br/><br/><br/>Candidate Fix Deposit</div></a>
<a href="../logout.php"><div class="team7" style="text-align:center;"><br/><br/><br/><br/>Logout</div></a>

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