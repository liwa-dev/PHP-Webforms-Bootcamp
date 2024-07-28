<?php

$myfile = fopen('myfile.txt', 'w') or die('Unable to open file!');
$txt = "welcome to php";
fwrite($myfile, $txt);
fclose($myfile);

?>