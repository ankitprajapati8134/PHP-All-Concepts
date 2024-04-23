<?php
//while loop
// $i = 0;
// while($i<500){
//     echo "The Value of i is "; 
//     echo $i+1;
//     echo "<br>";
//     //$i++
//     $i+=3;
// }

//For loop

$i = 0;
for ($i = 0; $i < 10; $i++) {  
    //for(initialization; condition; updation)       
    echo "The Value of i is $i"; 

    echo "<br>";
}

// do while

/*
do {   
    some lines of code is executed here
 }while(condition);
*/

// $i =0;
// do{
//     echo "$i <br>";
//     $i++;
// }while ($i < 7);





//For Each loop

$arr = array("banana", "apple","Apple","harpic", "Bread");
// for ($i= 0; $i < count($arr); $i++) {
//     echo $arr[$i];
//     echo "<br>";
// }

foreach ($arr as $value) {   
    echo "$value <br>";
}
?>