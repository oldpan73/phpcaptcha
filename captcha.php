<?php
session_start();

$captchaString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 5);
$_SESSION['captcha'] = $captchaString;
$image = imagecreatetruecolor(150, 50);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 0, 0, 150, 50, $white);
imagettftext($image, 20, rand(-10, 10), 20, 30, $black, 'font/sewer.ttf', $captchaString);
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
