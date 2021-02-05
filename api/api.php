<?php
header("Content-Type:application/json");
require "connect.php";


get_melding();

$emnenavn=$_GET['Emnenavn'];
//$emnekode = get_emnekode($emnenavn);
show($emnenavn);


$melding_id=$_POST['Melding_id'];
$meldingstekst=$_POST['Meldingstekst'];
$svar=$_POST['Svar'];
$emne_id=$_POST['Emne_id'];

insert($meldingstekst,$svar,$emne_id);



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

function insert($meldingstekst,$svar,$emne_id)
{
	global $conn;

	$query = $conn->prepare('INSERT INTO Meldinger (Meldingstekst,Svar,Emne_id) VALUES (?, ?, ?)');

	$query->bindParam(1,$meldingstekst, PDO::PARAM_STR, 50);
	$query->bindParam(2,$svar, PDO::PARAM_STR, 50);
	$query->bindParam(3,$emne_id, PDO::PARAM_STR, 50);

	$query->execute();

	/*
	$query = $conn->query("SELECT * FROM Meldinger");

	$result = $query->fetchAll();

	foreach($result as $object)
	{
		echo "Meldingstekst : " . $object['Meldingstekst'] . " Svar : ".$object['Svar'] . "Emne_id : " . $object['Emne_id'];
	}
	*/

}
function get_melding()
{
	global $conn;

	$query = $conn->query("SELECT Meldingstekst,Melding_id FROM Meldinger");

	$result = $query->fetchAll();

	echo "<b>Index Page</b> ( Total No of Results : ".$query->rowCount()." )</br>";

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

/*
function get_emnekode($emnenavn){
	global $conn;

	$query = $conn->query("SELECT Emnenavn, Emnekode FROM Emner WHERE Emnenavn = $emnenavn");

	$result = $query->fetchAll();

	foreach($result as $object)
	{
		echo "</br>Emnenavn : ".$object['Emnenavn']."</br>Emnekode : ".$object['Emnekode']."</br>";
	}
}
*/
