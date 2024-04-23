<?php
//Connection to the Database
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

?>