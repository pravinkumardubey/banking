<?php

echo date('c');
echo "<br/>";
echo date('DateTime::ISO8601');
echo "<br/>";
//$date=strtotime('date');
$date=strtotime("+1month");
echo date('M d,Y',$date);
echo "<br/>";
$t=strtotime("February 15,2015");
echo date('Y-m-d',$t);
echo "<br/>";
$d=strtotime("tommorow");
echo date("Y:m:d h:i:sa",$d)."<br/>";
$d=strtotime("next Saturday");
echo date("Y:m:d h:i:sa",$d)."<br/>";
$d=strtotime("+3 Month");
echo date("Y:m:d h:i:sa",$d)."<br/>";


$date=strtotime("+00:10 hour");
echo date('h:i:s',$date);
echo "<br/>";

?>