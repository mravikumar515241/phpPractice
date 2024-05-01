<?php
$myFile = fopen("fullforms.txt","r") or die("Unable to open file !");
//echo fread($myFile,filesize("fullforms.txt"));
// echo "<br>";
// echo "<br>";
// echo fgets($myFile);
// fclose($myFile);/

while(!feof($myFile)){
    echo fgetc($myFile);
    echo "<br>";
    // echo "<br>";
}

?>