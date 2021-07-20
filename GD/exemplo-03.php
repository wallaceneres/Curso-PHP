<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0,);
$grey = imagecolorallocate($image, 100, 100, 100);

imagettftext($image,32, 0, 320, 250,  $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image,32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Wallace Neres");
imagestring($image,3, 440 ,370, "Concluido em: " .date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
//imagem , nome e extensao, qualidade(0/100)
imagejpeg($image);

imagedestroy($image);

?>