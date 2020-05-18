<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg=='4')
{
	echo "Your Transection is Close";
}
if($msg=='3')
{
	echo "<font color=blue>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warning</font>";
	echo "<br/>";
	echo "<font color=blue>Pagal Ho Kya </font><font color=orange> (Bhag Jaldi)</font>";
}
if($msg=='2')
{
	echo "Your balence is Low";
}
if($msg=='1')
{
	echo "Please Enter A valid Data";
}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		input:focus{
			border:2px solid green;box-shadow: 0 0 30px;
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

<body style="background:linear-gradient(to right,red,yellow);">
<audio autoplay loop>
<source src="../sound/b.mp3"/>
</audio>
<body style="background:linear-gradient(to right,red,blue);"><br/><br/><br/>
<div style="height:500px;width:500px;background:linear-gradient(to right,#ff0080,red);margin:0px auto;border:5px solid red;border-radius:50px 0px 50px 0px;box-shadow:0.5px 0.5px  50px white;"><br/><br/><br/><br/>
<center><h1 style="color: blue;">Cash With Drawal!!!</h1><center><br/>
<form action="dr.php" method="post">
<table align="center" border="1">
<tr>
<th>Acount Number:</th><th><input type="number" required="true" name="acc"></th>
</tr>
<tr>
<th>Name:</th><th><input type="text" required="true" name="name"></th>
</tr>
<tr>
<th>Dob:</th><th><input type="date" required="true" name="dob"></th>
</tr>
<tr>
<th>Amount:</th><th><input type="number" required="true" name="amo"></th>
</tr>
<tr>
<th colspan="2"><input type="submit"></th>
</tr>
</table>
</form>
</div>
</body>
</html>