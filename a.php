<?php
session_start();
header('content_type:image/jpeg');
$text=$_SESSION['code']=mt_rand(1111,9999);
$image=imagecreate(200, 30);
imagecolorallocate($image, 0, 0, 0);
$font_color=imagecolorallocate($image, 225,225,225);
imagettftext($image, 20, 0, 70, 20, $font_color, 'PRISTINA.TTF', $text);
imagejpeg($image);
?>