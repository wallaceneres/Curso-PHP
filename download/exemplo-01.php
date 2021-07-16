<?php

$link = "https://www.google.com.br/logos/doodles/2021/elizeth-cardosos-101st-birthday-6753651837108991-l.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">