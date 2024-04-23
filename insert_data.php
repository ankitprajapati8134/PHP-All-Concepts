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

//Variables to be inserted into the table
$name = "Vinay";
$destination = "Russia";

//Sql query to be excuted
$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn ,$sql);

//Add a new table data in the database
if($result){
    echo "The Record has been inserted successfully <br>";
}else{
    echo "The The Record has not been inserted successfully becasue of the error <br>" .mysqli_error($conn);
}




?>