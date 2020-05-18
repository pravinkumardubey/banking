<?php
error_reporting(0);
$m=$_REQUEST["m"];
if ($m==1) {
	echo "Please Enter A Valid Email";
}
?>
<head>
<style>
input:focus{
	border:2px solid green;box-shadow:0 0 5px black;
}
</style>
</head>
<body bgcolor="brown">
<div style="height:300px;width:400px;background:orange;margin:100px auto;border:5px solid blue;border-color: #f1c40f #e74c3c #9b59b6 #2ecc71;">
<center><h2 style="color:#fff;">WHO YOU ARE</h2>
<br>
<form action="forgetcode.php" method="post">
<select required name="select" style="background:transparent;outline:none;background:pink;;height:30px;width:300px;">
<option value="">--select--</option>
<option>Employee</option>
<option>Candidate</option>
</select><br/><br/>
<input type="email" name="email" required style="background:transparent;outline:none;background:pink;;height:30px;width:300px;"><br/><br/>
<input type="submit" value="Send" style="background:transparent;outline:none;background:blue;height:30px;width:300px;color:#fff;">
</center>
</form>
</div>
</body>