<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../Hovedside.php?logginn=empty");
		exit();
	} else {
		$sql = "SELECT * FROM Logginn WHERE ID='$uid' OR bruker_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../logginn.php?logginn=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['bruker_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../logginn.php?logginn=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['idlogginn'];
					$_SESSION['u_first'] = $row['navn'];
					$_SESSION['u_last'] = $row['etternavn'];
					$_SESSION['u_email'] = $row['bruker_email'];
					$_SESSION['u_uid'] = $row['brukerid'];
					header("Location: ../side1.php?logginn=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?logginn=error");
	exit();
}
