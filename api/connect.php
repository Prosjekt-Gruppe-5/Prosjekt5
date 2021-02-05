<?php

$DB_HOST = "158.39.188.205";
$DB_NAME = "Datasikkerhet";
$DB_USER = "datasikkerhet";
$DB_PASSWORD = "?8QGb@_M]";

try{
    $conn = new PDO("mysql:host=$DB_HOST;port=3306;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // To turn on error mode for debugging errors
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  // To get maximum sql injection protection
   // echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
