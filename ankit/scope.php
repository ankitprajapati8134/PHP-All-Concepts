<?php
echo "Welcome to scope and Local and Global Variable in PHP <br>";
$c = 65; // Global Variable
$d =5;//Global variable
function printValue()
{
    //$a = 78; // Local Variable
    global $c , $d;  // This give the access to this global variable
    $c =100;
    $d = 190;
    echo "<br>The Value of Your variable c is $c and varible d is a $d <br>";
}

echo $c; 
echo "<br>";
printValue();
echo "<br>The Value of Your variable c is $c and varible d is a $d <br>";
echo var_dump($GLOBALS);
echo "<br>";
echo var_dump($GLOBALS["c"]);
echo "<br>";   
echo var_dump($GLOBALS["d"]);
?>
