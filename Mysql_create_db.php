<?php
// Requirements need to connect to the Database (STEP1)
$servername = "localhost";
$username = "root";
$password = ""; // but when we go inside the server then it does not go blank

//Create a Connection (STEP2)
$conn =  mysqli_connect($servername, $username, $password);

//Die if Connection was not successful
if (!$conn) {
    die("Sorry we failed to connect to the database :" . mysqli_connect_error());
} else {
    echo "Connection was Successful <br>";
}


//Create a DB (STEP3)
$sql = "CREATE DATABASE ankit";
$result = mysqli_query($conn ,$sql);

//Check for the database creation success.(STEP4)
if($result){
    echo "The db was created is successfully <br>!";
}else{
    echo "The db was created is not successfull becasue of the error <br>" .mysqli_error($conn);
}
// echo"the result is ";
// echo var_dump($result);
// echo "<br>";



?>