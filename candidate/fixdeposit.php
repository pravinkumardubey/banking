<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
error_reporting(0);
$msg=$_REQUEST['m'];
if($msg=='1')
{
	echo "Please Enter a valied Data";
}
?>
<!DOCTYPE html>
<html>
<script>
	
var audioEi=document.createElement('audio');
var canPlayAudio=!!(a.canPlayType&&a.canPlayType('audio/mpeg;').replace(/no/,"));
$(document).redy(function(){ $('slideshow').cycle('pause');});
}
}
</script>

<body>
<audio autoplay loop>
<source src="../sound/b.mp3"/>
</audio>
<body style="background:linear-gradient(to right,red,blue);"><br/><br/><br/>
<div style="height:500px;width:500px;background:linear-gradient(to right,red,yellow);margin:0px auto;border:5px solid green;border-radius:50px 0px 50px 0px;box-shadow: 0px 0px 35px #fff;"><br/><br/><br/><br/>
<h1 style="color: blue;"><marquee direction="down"><center>Fix Deposit!!!<center></marquee></h1><br/>
<center>for one year<center>
<form action="fix.php" method="post">
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