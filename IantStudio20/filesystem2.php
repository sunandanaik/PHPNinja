<?php

$file='test.txt';
//opening file to read
$handle=fopen($file, 'a+');

//read the file data
//echo fread($handle, filesize($file));

//echo fread($handle, 120);

//read single line
// echo fgets($handle);
// echo fgets($handle);

//to read single character
echo fgetc($handle);
echo fgetc($handle);

//Writing to a file
fwrite($handle, "\nEverything is Dark!!");

?>