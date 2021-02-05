<?php 
//if(ISSET($_POST["submit"])) 
{
include_once "dbh.inc.php";

$emne = $conn->query("SELECT * FROM Emner WHERE Emne_id = '{$_POST["messageSubject"]}'");
    while($row = mysqli_fetch_array($emne)) {
        $emnenavn = $row['Emnenavn'];
    }

    $mld = mysqli_real_escape_string($conn, $_POST['message']);
    $id = mysqli_real_escape_string($conn, $_POST['messageSubject']);

    $sql ="INSERT INTO meldinger (Meldingstekst, Emne_id)VALUES('$mld', '$id')";

    $result = $conn->query($sql);

    header("Location: ../../index.php?Message-sent");
}

if(isset($_POST["submit"])) 
            {
        $sql = sprintf("INSERT INTO meldinger (Meldingstekst, Emne_id) VALUES (NOW(), '%s', '%s', '%s')",
                        $conn->real_escape_string($_POST["message"]),
                        $conn->real_escape_string($_POST["messageSubject"]),
                       );
            $conn->query($sql);
        }
?>