<?php

//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors_ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

//set unicode character
$connection->query("set names utf8");
//mysqli_set_charset($connection, "utf8");


if (mysqli_connect_errno())
{
   echo "Database Connect Failed : " . mysqli_connect_error();
}

?>