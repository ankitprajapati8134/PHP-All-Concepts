<?php
// Requirements need to connect to the Database (STEP1)
$servername = "localhost";
$username = "root";
$password = "";
$database = "ankit";


//Create a Connection (STEP2)
$conn =  mysqli_connect($servername, $username, $password, $database);
//Die if Connection was not successful
if (!$conn) {
    die("Sorry we failed to connect to the database :" . mysqli_connect_error());
} else {
    echo "Connection was Successful <br>";
}
//sql query to be excuted
$sql = "SELECT * FROM `trip` WHERE `dest` ='Bihar'";
$result = mysqli_query($conn, $sql);

//Usage of WHERE Clause to fetch data from the Database
$num = mysqli_num_rows($result);
echo $num = "Records found in the Database<br>";
$number = 1;
if ($num > 0) {
    //We can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
        echo $number . ".Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br>";
        $number =$number + 1;
    }
}
//Usage of WHERE Clause to fetch data from the Database

$sql = "UPDATE `trip` SET `name` = 'Mohit' WHERE `trip`.`sno` = 4";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$affected = mysqli_affected_rows($conn);
echo "<br>Number of Affected Rows: $affected";

if($result){
    echo "We Updated the Record Scuccessfully";
} else {    
    echo "We can not update the record successfully";
}
?>
