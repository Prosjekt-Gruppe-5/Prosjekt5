<?php
header("Content-Type:application/json");
//require "data.php";
require "connect.php";


get_emne();

if(!empty($_GET['Emnenavn']))
{
	$emnenavn=$_GET['Emnenavn'];
	$emnekode = get_emnekode($emnenavn);	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}


function get_emnekode($emnenavn){
	global $conn;

	$query = $conn->query("SELECT Emnenavn, Emnekode FROM Emner WHERE Emnenavn = $emnenavn");

	$result = $query->fetchAll();

	foreach($result as $object)
	{
		echo "</br>Emnenavn : ".$object['Emnenavn']."</br>Emnekode : ".$object['Emnekode']."</br>";	 
	}
}


function get_emne()
{
	global $conn;

	$query = $conn->query("SELECT Emnenavn,Emnekode FROM Emner");

	$result = $query->fetchAll();

	echo "<b>Index Page</b> ( Total No of Results : ".$query->rowCount()." )</br>";
	foreach($result as $object)
	{
		echo "</br>Emnenavn : ".$object['Emnenavn']."</br>Emnekode : ".$object['Emnekode']."</br>";	 
	}
}