<?php
session_start();
if(isset($_SESSION["loggedin"])){
    header("location: ../index.php");
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
	$PIN = mysqli_real_escape_string($conn, $_POST['pin']);
	//Error handler
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($kull) || empty($Studieretning) || empty($PIN)) {   //bruk denne når tabellene er sammenkoblet|| empty($kull)
		header("Location: ../signup_student.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?Name=invalid");
			exit();
		} else {
			if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $pwd)) {
				header("Location: ../signup.php?Password=invalid");
				exit();
				} else {
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=email");
					exit();
				} else {
					$sql = "SELECT * FROM student_view WHERE brukerid='$email'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=usertaken");
						exit();
					} else {
						//Hashing the password
						$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO student_view (Fornavn, Etternavn, Epost, Kull, Passord, Studieretning_id) VALUES ('$first', '$last', '$email','$kull', '$hashedpwd', $Studieretning);"; //INSERT INTO, Kull Value:, '$kull'
						mysqli_query($conn, $sql);
						$_SESSION["loggedin_student"] = true;
						$_SESSION["loggedin"] = true;
						header("Location: ../../index.php?signup=success");
						exit();
					}
				}
			}
		}
	}

} else {
	header("Location: ../signup_student.php");
	exit();
}