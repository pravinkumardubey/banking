<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg=='1')
{
	echo "Please Enter A Valid Data";
}
if($msg=='2')
{
	echo "Pagal ho Kya";
}
include("../connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		input:focus{
			border: 2px solid green;box-shadow: 0 0 35px;
		}
		@keyframes p{
			from{
				background-position: 0px;
			}
			to{
				background-position: 300px;
			}
		}
	</style>
</head>
<script>
	
var audioEi=document.createElement('audio');
var canPlayAudio=!!(a.canPlayType&&a.canPlayType('audio/mpeg;').replace(/no/,"));
$(document).redy(function(){ $('slideshow').cycle('pause');});
}
}
</script>
<body style="background:linear-gradient(to right,red,blue);">
<audio autoplay loop>
<source src="../sound/b.mp3"/>
</audio>
<br/><br/><br/>
<div style="height:500px;width:500px;background:linear-gradient(to right,white,red);margin:0px auto;border:5px solid green;border-radius:50px 0px 50px 0px;box-shadow:0.1px 0.1px 50px white;"><br/><br/><br/><br/>
<center><h1 style="background: linear-gradient(to right,red,green,blue,yellow,pink);-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation: p 1s linear infinite;">Balence Enquire!!!</h1><center><br/><br/>
<form action="in.php" method="post">

<table align="center" border="0" style="height:150px;width:150px;border:5px solid blue;background-color:blue;border-radius:20px;">
<tr>
<th>Acount Number:</th><th><input type="number" name="acc"></th>
</tr>
<tr>
<th>Name:</th><th><input type="text" name="name"></th>
</tr>
<tr>
<th>Dob:</th><th><input type="date" name="dob"></th>
</tr>
<tr>
<th colspan="2"><input type="submit"></th>
</tr>
</table>
</form>
</div>
</body>