<?php
//file system part-1

// $quotes=readfile('readme.txt');
// echo $quotes;

$file = 'readme.txt';

//check if file exists
if(file_exists($file))
{
	// //reads file
	// echo readfile($file);
	// //copy file
	// copy($file, 'quotes.txt');

	// echo "<br/>";
	// //absolute path of file
	// echo realpath($file)."<br/>";

	// //file size
	// echo filesize($file)."<br/>";

	// //rename file
	// rename($file, 'test.txt');
}
else
{
	echo 'file doesnot exist!!';
}
//to make new directory/folder
mkdir('quotes');

?>