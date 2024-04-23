<?php
//include 'dbconnect.php'; // if file is not present then it will allow the user to work
require 'dbconnect.php'; // if file is not present then it will not allow the user to work

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num = mysqli_num_rows($result);
echo ($num);
echo "<br>";
echo "Records found in the Database<br>";
while( $row = mysqli_fetch_assoc($result)) { 
    echo $row['sno'] .".Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo"<br>";
}
?>