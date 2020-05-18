<?php
session_start();
if($_SESSION['user']=='')
{
session_destroy();
header("Location:index.php");
}
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg=='1')
{
	echo "Please Enter a valied Data";
}
?>
<body>
<body style="background:linear-gradient(to right,red,blue);"><br/><br/><br/>
<div style="height:500px;width:500px;background:linear-gradient(to right,#000,yellow);margin:0px auto;border:5px solid green;border-radius:50%;"><br/><br/><br/><br/>
<h1><marquee direction="down"><center>Fix Deposit!!!<center></marquee></h1><br/>
<form action="fix.php" method="post">
<table align="center" border="1">
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
<th>Amount:</th><th><input type="number" name="amo"></th>
</tr>
<tr>
<th>Year:</th><th><select name="amo">
<option value="">--select--</option>
<option>one</option>
<option>two</option>
<option>three</option>
</select>
</th>
</tr>
<tr>
<th colspan="2"><input type="submit"></th>
</tr>
</table>
</form>
</div>
</body>