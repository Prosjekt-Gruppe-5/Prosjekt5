<?php

$dbServername = "158.39.188.205";
$dbUsername = "datasikkerhet";
$dbPassword = "?8QGb@_M]";
$dbName = "datasikkerhet";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";
 ?>