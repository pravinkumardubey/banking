<?php
session_start();
if ($_SESSION['candidate']=='') {
	session_destroy();
	header("Location:../index.php");
}
?>
<body bgcolor="forestgreen">
<form action="change.php" method="post">
<table align="center" border="1">
<tr>
<th>Old Password:</th><th><input type="text" name="op"></th>
</tr>
<tr>
<th>New Password:</th><th><input type="text" name="np"></th>
</tr>
<tr>
<th>Conform New Password:</th><th><input type="text" name="cnp"></th>
</tr>
<tr>
<th colspan="2"><input type="submit"></th>
</tr>
</table>
</form>
</body>