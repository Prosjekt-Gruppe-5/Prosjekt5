<?php
//Mer kommer bare struktur for nå
if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	//Error handler
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
			//Insert the user into the database
			$sql = "INSERT INTO regist (username, first, last, email, password) VALUES ('$uid', '$first', '$last', '$email', '$pwd');";
			mysqli_query($conn, $sql);
			include 'upload.inc.php';
			header("Location: ../../index.php?signup=success");
			exit();
	}

} else {
	header("Location: ../signup.php");
	exit();
}
