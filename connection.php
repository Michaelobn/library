<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "lis";

// Establish connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
