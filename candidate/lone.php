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
	echo "<font color=red><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warning.</font><br/><font color=blue>You Have Already Given Loan</h1></font>";
}
else

// echo "drtfyu";
if($msg=='5')
{
	echo "<font color=yellow><h2>Please Enter a Valid Data</h2></font>";
}
else 
	// echo rtfvb
if($msg=='3')
{
	echo "<h2><font color=yellow>Aapko Loan nahi Mila hai</font></h2>";
}
else

// echo "drtfyu";
$ms=$_REQUEST['msg'];
if($msg="$ms")
{
	echo "<h2><font color=yellow>Aapka Lone Rs<font color=green> $ms.</font> Hai<br/> Kripaya <font color=red>$ms.</font> Hi Rakam Jama Kare</font></h2>";
}
else 
	// echo tfybunj

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
<body style="background:linear-gradient(to right,orange,blue);">
<audio autoplay loop>
<source src="../sound/b.mp3"/>
</audio>
<div style="height:500px;width:500px;background:linear-gradient(to right,#ff2080,red);border:5px solid green;box-shadow:0.5px 0.5px 35px white;margin:0px auto;border-radius:50px 0px 50px 0px;"><br/><br/>
<br/><br/><br/>
<center><h1 style="color: blue;">~~LOAN~~</h1></center>
<form action="lon.php" method="post">
<table align="center" border="1" style="height:150px;width:150px;border:5px solid 
red;background-color:green;border-radius:20px;">
<tr>
<th>Select:</th><th><select name="select">
<option value="">--select--</option>
<option>Borrow Loan</option>
<option>Pey Loan</option>

</select></th>
</tr>
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
</body>