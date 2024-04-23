<?php

// $a =readfile("myfile.txt");
// echo $a;

//  readfile("myfile.txt");

//$a =readfile("myfile.txt");
$fptr = fopen("myfile.txt","r");
//echo var_dump($fptr);
if(!$fptr){
    die("Unable to open file, enter a valid filename ");
}
//$content = fread($fptr, 3);
$content = fread($fptr, filesize("myfile.txt"));
echo $content;
fclose($fptr);

?>