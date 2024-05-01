<?php

$myfile = fopen("fwriteFile.txt","w") or die("Unable To open !");
$newdata = "Hello World !\n";
fwrite($myfile,$newdata);
$newdata = "Hi \n";
fwrite($myfile,$newdata);
echo readfile("fwriteFile.txt");
fclose($myfile);


?>