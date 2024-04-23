<?php
/*
//writing to a file in php
echo "Welcome to write files in php";
$fptr = fopen("myfile1.txt", "w");
fwrite($fptr,"This is the best file on this planet , Please dont argue with me on this one\n");
fwrite($fptr,"This is another content\n");
fwrite($fptr,"Welcome to the world of php.");
fclose($fptr);

*/

// Appending to a file in php

$fptr = fopen("myfile1.txt", "a");
fwrite($fptr," <br>This file a added or apended in the last line of my text file.");
fclose($fptr);

?>