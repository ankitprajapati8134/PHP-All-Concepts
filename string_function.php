<?php
$name = "Ankit is a naive tech";
echo $name; 
echo "<br>" ;
echo strlen($name) ;
echo "<br>";
//strlen fucntion
echo "The Length of"." Name String is ".strlen($name);
echo"<br>";
//str_word_count function
echo str_word_count($name) ;
echo "<br>";

//String reverse 
echo strrev($name) ;
echo "<br>";

// Search the word position in a String
echo strpos($name,"is") ;
echo "<br>";
echo str_replace("Ankit","Ram", $name) ;
echo "<br>";
echo str_repeat("$name",10) ;
echo "<br>";

//echo rtrim("<pre>  This is a good boy</pre> ") ; or
echo "<pre>";
echo rtrim("  This is a good boy") ;
echo "<br>";  
echo ltrim("  This is a good boy") ;
echo"</pre>";


//Operators in PHP
$x =78;
$y =78;
echo "For x <>y , the result is ";
echo var_dump($x <> $y) ; /// <> this is not equal operator
echo "<br>";



//Logical Operators

//AND operator
$m = true;
$n = false;
echo "For m and n , the result is ";
echo var_dump($m and $n);
echo "<br>";
echo "For m && n , the result is ";
echo var_dump($m && $n);
echo "<br>";

// OR Operator
$x = true;
$y = false;
echo "For x or y , the result is ";
echo var_dump($x or $y);
echo "<br>";

echo "For x || y , the result is ";
echo var_dump($x || $y);
echo "<br>";

//NOR opeator
$x = true;
echo "For !x, the result is ";
echo var_dump(!$x);
echo "<br>";

$y = false;
echo "For !y, the result is ";
echo var_dump(!$y);
echo "<br>"

 ?>