<?php

if(isset($_SESSION["loggedin_student"]) && $_SESSION["loggedin_student"] === false){
    header("location: ../../index.php");
    exit;
}

include_once "includes/dbh.inc.php";

if(isset($_POST["submit"])) 
            {
        $sql = sprintf("INSERT INTO Meldinger (Meldingstekst, Emne_id) VALUES ('%s', '%d')",
                        $conn->real_escape_string($_POST["message1"]),
                        $conn->real_escape_string($_POST["emneid"])
                       );
                     
            $conn->query($sql);
            //var_dump($conn);
            }
            
$foreleser = "SELECT * FROM Foreleser";
$foreleser_conn = $conn->query($foreleser);

$emner = "SELECT * FROM Emner";
$emner_conn = $conn->query($emner);

$meldinger = "SELECT * FROM Meldinger";
$meldinger_conn = $conn->query($meldinger)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HIØ meldingssystem</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="featured-content">
        <form action='message_student.php' method='get'>
        <?php //if()  ?>
        <select name='subject' id='subject'>
                <?php while($rad = mysqli_fetch_array($emner_conn)) { ?>
                    <option value="<?php echo $rad["Emne_id"];?>"><?php echo $rad["Emnenavn"];?></option>
                    ?><?php } ?>
                </select>
        <input type='submit' value='Velg'>
    </form>

    <?php 
        if(ISSET($_GET['subject']) && $_GET['subject'] != '0'){
            echo "
            <h2>Emner:". $emner = $rad['Emnenavn']." </h2>";
            echo"
            <form method='POST'>
                <label for='message'><strong>Melding til foreleser:</strong></label>
                <textarea id='message1' name='message1'></textarea>
                <input name='emneid' id='messageSubject' value=" . $_GET["subject"] . ">
                <input type='submit' value='submit' name='submit'>
            </form>

            <p><strong>Alle meldinger: </strong></p>
            ";?>
            <?php while($rad1 = mysqli_fetch_array($meldinger_conn)) {?>
            <p><?php echo $rad1["Meldingstekst"] ?></p></span>
            <?php }} ?>
    
</body>
</html>