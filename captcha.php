<?php 
session_start();

$_SESSION['captcha']=mt_rand(1000,9999);

$img=imagecreate(110,50);
$font ='fonts/@El&Font Destroy!.ttf';

$bg=imagecolorallocate($img,255,255,255);
$textcolor=imagecolorallocate($img,0,0,0);

imagettftext($img,30,0,20,40,$textcolor,$font,$_SESSION['captcha']);

header('content-type:image/jpeg');
imagejpeg($img);
imagedestroy($img);






?>