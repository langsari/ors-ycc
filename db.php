<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors-origin";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbDatabase);

//connection checking
if ($connection) {
 
   //set universal encoding
   mysqli_query($connection,"SET NAMES 'utf8'") or die(mysqli_error());
} else {
   die("Could not connect with db" . mysql_error());
}

?>
