<?php
if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$emner = mysqli_real_escape_string($conn, $_POST['emner']);
	//Error handler
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($pwd)) {
		header("Location: ../signup_foreleser.php?signup=empty");
		exit();
	} else {
			//Insert the user into the database
			$sql = "INSERT INTO foreleser (Fornavn, Etternavn, Epost, Passord) VALUES ('$first', '$last', '$email', '$pwd');";
			mysqli_query($conn, $sql);
			include 'upload.inc.php';
			header("Location: ../../index.php?signup=success");
			exit();
	}

} else {
	header("Location: ../signup_foreleser.php");
	exit();
}
