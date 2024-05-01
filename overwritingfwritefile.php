<?php

$myfile = fopen("fwriteFile.txt","w");
$newdata = "Over Writing\n";
fwrite($myfile,$newdata);
$newdata = "Over Writing with New Data\n";
fwrite($myfile,$newdata);
readfile("fwriteFile.txt");
?>