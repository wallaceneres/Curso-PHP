<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0,);
$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image,5, 450 ,150, "CERTIFICADO", $titleColor);
imagestring($image,5, 440 ,350, "Wallace Neres", $titleColor);
imagestring($image,3, 430 ,170, "Concluido em: " .date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
//imagem , nome e extensao, qualidade(0/100)
imagejpeg($image, "certificado-".date("Y-m-d"). ".jpg", 10);

imagedestroy($image);

?>