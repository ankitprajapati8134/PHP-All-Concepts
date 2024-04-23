<?php
echo "Welcome to the World of Associative Arrays <br>";
// $arr = array("Appe","Banana","Guava","Grapes") ;
// these are called as Index array:
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];
// echo "<br>";
// echo $arr[3];
// echo "<br>";


// $favCol = array(
//     '4' =>'red',
//     'Shivam'=> 'green',
//     'Ankit'=> 'Blue');

//     echo $favCol['Ankit'];
//     echo "<br>";
//     echo $favCol['Shivam'];
//     echo "<br>";
//     echo $favCol[4];

// Associative array
$favCol = array(
    '4' => 'red', 'Shivam' => 'green',
    'Ankit' => 'Blue'
);

foreach ($favCol as $key => $value) {
    echo "<br>favorite color of  $key is $value ";
}
