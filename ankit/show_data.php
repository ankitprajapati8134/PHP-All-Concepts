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
$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num = mysqli_num_rows($result);
echo ($num);
echo "<br>";
echo "Records found in the Database<br>";
//Display the rows returned by the sql query
if ($num > 0) {
    // $row = mysqli_fetch_assoc($result); // (mysqli_fetch_assoc)=>it will fetch the record one by one till all record finished showing.
    // echo var_dump($row); /// it will print 1st row of the database
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row); 
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row); 
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row); 
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row); 
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row); 
    // echo "<br>";

    //We can fetch in a better way using the while loop

    while( $row = mysqli_fetch_assoc($result)) {
        //echo var_dump($row);
        echo $row['sno'] .".Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo"<br>";
}
}

?> 