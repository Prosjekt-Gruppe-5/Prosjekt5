<?php
session_start();
if(!isset($_SESSION["loggedin_student"])){
    header("location: ../index.php");
    exit;
}
 

include_once "includes/dbh.inc.php";

if(isset($_POST["submit"])) 
            {
        $sql = sprintf("INSERT INTO Meldinger_view (Meldingstekst, Emne_id) VALUES ('%s', '%d')",
                        $conn->real_escape_string($_POST["message1"]),
                        $conn->real_escape_string($_POST["emneid"])
                       );
                     
            $conn->query($sql);
            //var_dump($conn);
            }
            
$foreleser = "SELECT * FROM Foreleser_view";
$foreleser_conn = $conn->query($foreleser);

$emner = "SELECT * FROM Emner_view";
$emner_conn = $conn->query($emner);

$meldinger = "SELECT * FROM Meldinger_view";
$meldinger_conn = $conn->query($meldinger)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../js/empty_student.js"> </script>
    <title>HIØ meldingssystem</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<div id="featured-content">
<div id="nav">
    <a href="../index.php">Hjem</a>
</div>
        <form action='message_student.php' method='get'>
        <?php //if()  ?>
        <select name='subject' id='subject'>
                <?php while($rad = mysqli_fetch_array($emner_conn)) { ?>
                    <option value="<?php echo $rad["Emne_id"];?>"><?php echo $rad["Emnenavn"];?></option>
                    ?><?php } ?>
                </select>
        <?php 
       echo "<input type='submit' value='Velg'>"
        ?>
    </form>

    <?php 
        if(ISSET($_GET['subject']) && $_GET['subject'] != '0'){
            echo "
            <h2>Emner:". $emner = $rad['Emnenavn']." </h2>";
            echo"
            <form name='form1' method='POST'>
                <label for='message'><strong>Melding til foreleser:</strong></label>
                <textarea id='message1' name='message1'></textarea>
                <input hidden name='emneid' id='messageSubject' value=" . $_GET["subject"] . "><br>
                <p>Pin koder finner du på: <a href='../dokumentasjon.html'>Dokumentasjon</a></p>
                <label for=''>Pin Kode: </label>
                <input type='text' name='PIN_text' id='PIN_text' placeholder='PIN'>
                <input type='submit' value='submit' onclick='return IsEmpty()' name='submit'>
            </form>

            <p><strong>Alle meldinger: </strong></p>
            "?>
            <?php while($rad1 = mysqli_fetch_array($meldinger_conn)) {?>
            <p>Melding ID: <?php echo $rad1["Melding_id"] ?></p></span>
            <p>Student: <?php echo $rad1["Meldingstekst"] ?></p></span>
            <p>Foreleser: <?php echo $rad1["Svar"] ?></p></span>
            <p>Gjest: <?php echo $rad1["Kommentar"] ?></p></span>
            <?php }} ?>
            
    
</body>
</html>