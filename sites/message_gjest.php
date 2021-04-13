<?php
session_start();
if(isset($_SESSION["loggedin"])){
    header("location: ../index.php");
    exit;
}
 

include_once "includes/dbh.inc.php";

if(isset($_POST["submit"])) 
            {
        $sql = sprintf("UPDATE Meldinger_view SET Kommentar = '". $_POST['message1'] ."' WHERE Melding_id = '". $_POST['test'] ."'");              
            $conn->query($sql);
            //var_dump($conn);
            }
            if(isset($_POST["submit1"])) 
            {
            $sql = sprintf("SELECT * FROM rapport");      
            $conn->real_escape_string($_POST["hei"]);       
            $conn->query($sql);
            //var_dump($conn);
            }
$foreleser = "SELECT * FROM Foreleser_view";
$foreleser_conn = $conn->query($foreleser);

$emner = "SELECT * FROM Emner_view";
$emner_conn = $conn->query($emner);

$meldinger = "SELECT * FROM Meldinger_view";
$meldinger_conn = $conn->query($meldinger);

$meldinger_1 = "SELECT * FROM Meldinger_view";
$meldinger_1_conn = $conn->query($meldinger_1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <script src="../js/empty.js"> </script>
    <script src="../js/pin.js"> </script>
    <title>HIØ meldingssystem</title>s
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="nav">
    <a href="../index.php">Hjem</a>
</div>
    <div id="featured-content">
            <p>Pin koder finner du på: <a href="../dokumentasjon.html">Dokumentasjon</a></p>
            <form name="form2" action="" method="get">
            <input type="number" name="pin" placeholder="PIN">
            <input type="submit" value="sumbit" onclick='return Pin()' name="submit">
            </form>
            <?php if(isset($_GET['pin']) != NULL) {?>
           <p><strong>Alle meldinger fra studenter: </strong></p>
            <?php while($rad1 = mysqli_fetch_array($meldinger_conn)) {?>
            <p>Melding ID: <?php echo $rad1["Melding_id"] ?></p></span>
            <p>Student: <?php echo $rad1["Meldingstekst"] ?></p></span>
            <p>Foreleser: <?php echo $rad1["Svar"] ?></p></span>
            <p>Gjest: <?php echo $rad1["Kommentar"] ?></p></span>
            <form method="get">
                <input type="text" readonly value="Upassende/Spam" name="hei">
                <input type="submit" value="Rapport" name="sumbit1">
            </form>
            <?php } ?>
            
            <form name='form1' method='POST'>
                <label for='message'><strong>Svar til student:</strong></label>
                <textarea id='message1' name='message1'></textarea><br>
                <select name='test' id='subject'>
                <?php while($rad = mysqli_fetch_array($meldinger_1_conn)) { ?>
                    <option value="<?php echo $rad["Melding_id"];?>"><?php echo $rad["Melding_id"];?></option>
                ?><?php } ?>
                </select>
                <label for="">Pin Kode: </label>
                <input type='text' name='PIN_text' id='PIN_text' placeholder="PIN">
                <input type='submit' value='submit' onclick='return IsEmpty()' name='submit'>
            </form>
        <?php } ?> 
</body>
</html>