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


//Create a table in the dB (STEP3)
$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , 
`dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))" ;
$result = mysqli_query($conn ,$sql);

//Check for the table created success.(STEP4)
if($result){
    echo "The table was created is successfully <br>";
}else{
    echo "The table was created is not successfull becasue of the error <br>" .mysqli_error($conn);
}


?>