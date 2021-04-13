<?php
session_start();
if(isset($_SESSION["loggedin"])){
    header("location: ../../index.php");
    exit;
}
if (isset($_POST['submit'])) {
	

	include_once 'dbh.inc.php';

	$emne = $conn->query("SELECT * FROM Emner_view WHERE Emne_id = '{$_POST["emner"]}'");
        while($row = mysqli_fetch_array($emne)) {
            $emnenavn = $row['Emnenavn'];
        }

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$emner = mysqli_real_escape_string($conn, $_POST['emner']);
	//Error handler
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($emner)) {
		header("Location: ../signup_foreleser.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
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
					$sql = "SELECT * FROM Foreleser_view WHERE brukerid='$email'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=usertaken");
						exit();
					} else {
						//Hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO Foreleser_view (Fornavn, Etternavn, Epost, Passord, Emne_id) VALUES ('$first', '$last', '$email', '$hashedPwd', '$emner');";

						mysqli_query($conn, $sql);
						include 'upload.inc.php';
						$_SESSION["loggedin_foreleser"] = true;
						$_SESSION["loggedin"] = true;
						header("Location: ../../index.php?signup=success");
						exit();
					}
				}
			}
		}
	}
} else {
	header("Location: ../signup_foreleser.php");
	exit();
}