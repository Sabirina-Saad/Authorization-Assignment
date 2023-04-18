<?php
session_start();  //starts session

// enables us connect to the database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "student";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}

?>