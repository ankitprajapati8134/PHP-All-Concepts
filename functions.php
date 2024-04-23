<?php
// first initilly function is called and then it goes to the function definition 
echo"Welcome to the PHP tutorial on Function <br>";
function processMarks($marksArr) {
    $sum = 0 ;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum ;    
}


function avgMarks($marksArr) {
    $sum = 0 ;
    $i =1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i ;    
}
$ankit = [34,98,45,87,56,97];
$vikrant = [95,92,93,88,77,89] ;

$totalMarksAnkit = processMarks($ankit);
$totalAvgMarksAnkit = avgMarks($ankit);

$totalAvgMarksVikrant = avgMarks($vikrant);
$totalMarksVikrant = processMarks($vikrant);

echo "Total marks scored by Ankit out 600 is $totalMarksAnkit, and Total Avg is $totalAvgMarksAnkit<br>";
echo "Total marks scored by Vikrant out 600 is $totalMarksVikrant, and Total Avg is $totalAvgMarksVikrant";


?>