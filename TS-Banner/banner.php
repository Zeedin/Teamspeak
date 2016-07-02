<?php
date_default_timezone_set("America/Vancouver");

header('Content-Type: image/png');

$im = @imagecreatefrompng('TS-Banner.png');

$black = imagecolorallocate($im, 0, 0, 0);


$t = date('g');
if ($t  == "1") { $date = "one";}
if ($t  == "2") { $date = "two";}
if ($t  == "3") { $date = "three";}
if ($t  == "4") { $date = "four";}
if ($t  == "5") { $date = "five";}
if ($t  == "6") { $date = "six";}
if ($t  == "7") { $date = "seven";}
if ($t  == "8") { $date = "eight";}
if ($t  == "9") { $date = "nine";}
if ($t  == "10") { $date = "ten";}
if ($t  == "11") { $date = "eleven";}
if ($t  == "12") { $date = "twelve";}


$text = "It's about " .$date." o'clock";

$font = 'font.ttf';
$size = 37;

imagettftext($im, $size, 0, $x + 420, 130, $black, $font, $text );

imagepng($im);
imagedestroy($im);
?>