<?php
session_start();
?>
<body>
<center><h1>Credit Amount!!!</h1><center>
<form action="cre.php" method="post">
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
<th colspan="2"><input type="submit"></th>
</tr>
</table>
</form>
</body>