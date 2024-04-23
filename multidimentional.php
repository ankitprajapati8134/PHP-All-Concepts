<?php

echo "Welcome to Multi dimentional arrays in PHP <br>";

// $multiDim = array(
//     array(2, 5, 7, 8),
//     array(1, 2, 3, 1),
//     array(4, 5, 0, 1)
// );
//echo var_dump($multiDim);
// echo $multiDim[1][2];
// echo "<br>";

//Printing the contents of a 2 dimentional array
// for ($i = 0; $i < count($multiDim); $i++) {
//     echo var_dump($multiDim[$i]);
//     echo"<br>";
// }
////////////Creating a two dimentional array////////////////
// $multiDim = array(
//     array(2, 5, 7, 8),
//     array(1, 2, 3, 1),
//     array(4, 5, 0, 1)
// );
// for ($i = 0; $i < count($multiDim); $i++) {
//     for ($j = 0; $j < count($multiDim[$i]); $j++) {
//         echo $multiDim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }



/////////3 Dimentional Array//////////////////
$multiDim = array(
    array(
        array(2, 0, 9, 8),
        array(1, 6, 3, 2),
        array(4, 5, 7, 1)
    )
);

for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        for ($k = 0; $k < count($multiDim[$i][$j]); $k++) {
            echo $multiDim[$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
}
