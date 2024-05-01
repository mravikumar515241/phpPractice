<?php

$myfile  = fopen("fwriteFile.txt","a");
$newdata = "Appending new text \n";
fwrite($myfile,$newdata);
$newdata = "Appending new text by using a mode";
fwrite($myfile,$newdata);
readfile("fwriteFile.txt");

?>