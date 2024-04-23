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
// $sql = "DELETE FROM `trip` WHERE `dest` ='Russia' LIMIT 3"; here limit is used to limit the data.
// suppose i want to delete the data 3 table out of 7 table whose dest is russia.
$sql = "DELETE FROM `trip` WHERE `dest` ='Russia'";
$result = mysqli_query($conn, $sql);

$affected = mysqli_affected_rows($conn);
echo "<br>Number of Affected Rows: $affected <br>";

if (!$result) {
    echo "Delete Successfully";
} else {
   $err =mysqli_error($conn);
    echo "Not Delete Successfully due to erro --> $err";
}

?>
