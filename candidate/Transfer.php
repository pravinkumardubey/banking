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
	echo "Pagal ho Kya...";
}
else
//sedfjjbk
 if($msg=='2')
{
	echo "Your Balence is Low...";
}
else {
	//dfvmbjn
}
if($msg=='3')
{
	echo "Please Enter a valid Account No...";
}
else {
	//dfvmbjn
}
?>
<!DOCTYPE html>
<html>
<body style="background:linear-gradient(to right,red,blue);"><br/><br/><br/>
<div style="height:500px;width:500px;background:linear-gradient(to right,red,yellow);margin:0px auto;border:5px solid green;border-radius:50px 0px 50px 0px;box-shadow: 0px 0px 35px #fff;"><br/><br/><br/><br/>
<h1 style="color: blue;"><marquee direction="right"><center>Money Transfer!!!<center></marquee></h1><br/>
<form action="money.php" method="post">
<table align="center" border="1">
<tr>
<th>Acount Number:</th><th><input type="number" required="true" name="acc"></th>
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