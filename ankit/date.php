<?php
echo "Welcome to the World of Dates <br>";

$d = date("dS F Y g:i A");
echo "Todays date is $d <br>";
$today = date("D M j G:i:s T Y");     
echo "Today day and Time is $today  <br>";



// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date(' <br>l jS \of F Y h:i:s A');

$year = date("Y ");
// date is used for web pages for copyright
echo "<br>Copyright $year  | All right reserved <br>";
?>