<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../welcome.php");
    exit;
}
if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$kull = mysqli_real_escape_string($conn, $_POST['kull']);
	$Studieretning = mysqli_real_escape_string($conn, $_POST['Studieretning']);
	//Error handler
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($kull) || empty($Studieretning)) {   //bruk denne når tabellene er sammenkoblet|| empty($kull)
		header("Location: ../signup_student.php?signup=empty");
		exit();
	} else {
			//Insert the user into the database
			$sql = "INSERT INTO Studenter (Fornavn, Etternavn, Epost, Kull, Passord, Studieretning_id) VALUES ('$first', '$last', '$email','$kull', '$pwd', $Studieretning);"; //INSERT INTO, Kull Value:, '$kull'
			mysqli_query($conn, $sql);
			header("Location: ../../index.php?signup=success");
			exit();
	}

} else {
	header("Location: ../signup_student.php");
	exit();
}