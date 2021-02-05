<?php
session_start();
if(isset($_SESSION["loggedin_foreleser"]) && $_SESSION["loggedin_foreleser"] === false){
    header("location: ../../index.php");
    exit;
}
 

include_once "includes/dbh.inc.php";

if(isset($_POST["submit"])) 
            {
        $sql = sprintf("SELECT Kommentartekst FROM Kommentar WHERE Melding_id = '". $_POST['test'] ."'");              
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
$foreleser = "SELECT * FROM Foreleser";
$foreleser_conn = $conn->query($foreleser);

$emner = "SELECT * FROM Emner";
$emner_conn = $conn->query($emner);

$meldinger = "SELECT * FROM Meldinger";
$meldinger_conn = $conn->query($meldinger);

$meldinger_1 = "SELECT * FROM Kommentar WHERE Kommentar.Melding_id = Meldinger.Melding_id";
$meldinger_1_conn = $conn->query($meldinger_1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HIØ meldingssystem</title>s
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="featured-content">
            <form action="" method="get">
            <input type="number" name="pin">
            <input type="submit" value="sumbit" name="submit">
            </form>
            <?php if(isset($_GET['pin']) != NULL) {?>
           <p><strong>Alle meldinger fra studenter: </strong></p>
            <?php while($rad1 = mysqli_fetch_array($meldinger_conn)) {?>
            <p><?php echo $rad1["Melding_id"] ?></p></span>
            <p><?php echo $rad1["Meldingstekst"] ?></p></span>
            <form method="get">
                <input type="text" readonly value="Upassende/Spam" name="hei">
                <input type="submit" value="Rapport" name="sumbit1">
            </form>
            <?php } ?>
            <form method='POST'>
                <label for='message'><strong>Svar til student:</strong></label>
                <textarea id='message1' name='message1'></textarea><br>
                <select name='test' id='subject'>
                <?php while($rad = mysqli_fetch_array($meldinger_1_conn)) { ?>
                    <option value="<?php echo $rad["Melding_id"];?>"><?php echo $rad["Melding_id"];?></option>
                ?><?php } ?>
                </select>
                <input type='submit' value='submit' name='submit'>
            </form>
            <?php } ?>    
</body>
</html>