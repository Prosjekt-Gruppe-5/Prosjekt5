<?php
header("Content-Type:application/json");
//require "data.php";
require "connect.php";


get_emne();

/*
if(!empty($_GET['Emnenavn']))
{
	$name=$_GET['Emnenavn'];
	//$price = get_price($name);
	
	if(empty($price))
	{
		response(200,"Product Not Found",NULL);
	}
	else
	{
		response(200,"Product Found",$price);
	}
	
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

function get_price($name)
{
	$products = [
		"book"=>20,
		"pen"=>10,
		"pencil"=>5
	];
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}
*/


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