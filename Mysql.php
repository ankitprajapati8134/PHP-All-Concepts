<?php
echo "Welcome to the MySql , We are ready to get connected with the Database <br> ";
/*Ways to connect to a MySql Database
1. MySQLi extention
2. PDO(PHP DATA OBJECTS)
*/


// Requirements need to connect to the Database
$servername = "localhost";
$username = "root";
$password = ""; // but when we go inside the server then it does not go blank

//Create a Connection
$conn =  mysqli_connect($servername, $username, $password);

//Die if Connection was not successful
if (!$conn) {
    die("Sorry we failed to connect to the database :" . mysqli_connect_error());
} else {
    echo "Connection was Successful";
}

?>