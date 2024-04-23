<?php
$fptr = fopen("myfile.txt", "r");
//echo fgets($fptr); // fgets read  one line at a time in a file i.e it reads line by line
/* 
// Reading a file line by line
while ($a = fgets($fptr)) {
    echo $a;
}
echo "End of the file has been reached";
*/

/*
// Reading a file character by character
while ($a = fgetc($fptr)) {
    echo $a;
    break;
}
echo "<br>End of the file has been reached";

*/

//Write a program which reads the content of a file until (.)fullstop encountered.
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break; 
    }
}

fclose($fptr);
?>