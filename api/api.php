<?php
header("Content-Type:application/json");
require "connect.php";


//get_emne();

if(!empty($_GET['Emnenavn']))
{
	$emnenavn=$_GET['Emnenavn'];
	//$emnekode = get_emnekode($emnenavn);
	show($emnenavn);
}
else
{
	response(400,"Putt et parameter inn i URLen (Emnenavn = ...).",NULL);
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


function show($emnenavn)
{
	global $conn;
	
	$query = $conn->prepare('SELECT * FROM Emner WHERE Emnenavn = ?');
		
	//echo preg_replace('?', $username, $result->queryString);

	$query->bindParam(1, $emnenavn, PDO::PARAM_STR, 50);
    //$query->bindParam(2, $emnekode, PDO::PARAM_STR, 50);
	//$query->bindParam(3, $emnekode, PDO::PARAM_STR, 50);
	
	$query->execute();

	$result = $query->fetch();

	echo "Ny kode!";
	
    echo "</br>Emnenavn : ".$result['Emnenavn']."</br>Emnekode : ".$result['Emnekode']."</br> ";	 
	
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