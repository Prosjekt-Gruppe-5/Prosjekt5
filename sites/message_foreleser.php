<?php
session_start();
$_SESSION['startTime'] = time();
if(!isset($_SESSION["loggedin_foreleser"])){
    header("location: ../index.php");
    exit;
}
 

include_once "includes/dbh.inc.php";

if(isset($_POST["submit"])) 
            {
        $sql = sprintf("UPDATE meldinger SET Svar = '". $_POST['message1'] ."' WHERE Melding_id = '". $_POST['test'] ."'");              
            $conn->query($sql);
            //var_dump($conn);
            }
            
$foreleser = "SELECT * FROM foreleser_view";
$foreleser_conn = $conn->query($foreleser);

$emner = "SELECT * FROM emner_view";
$emner_conn = $conn->query($emner);

$meldinger = "SELECT * FROM meldinger_view";
$meldinger_conn = $conn->query($meldinger);

$meldinger_1 = "SELECT * FROM meldinger_view";
$meldinger_1_conn = $conn->query($meldinger_1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../js/empty_foreleser.js"> </script>
    <title>HIØ meldingssystem</title>s
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="featured-content">
<div id="nav">
    <a href="../index.php">Hjem</a>
</div>
           <p><strong>Alle meldinger fra studenter: </strong></p>
           <!-- show db info from meldinger_view with a filterion that makes script/html/css tags invalid -->
            <?php while($rad1 = mysqli_fetch_array($meldinger_conn)) {?>
            <p>Melding ID: <?php echo $rad1["Melding_id"] ?></p></span>
            <p>Student: <?php echo htmlspecialchars($rad1["Meldingstekst"], ENT_HTML401 | ENT_COMPAT, 'UTF-8') ?></p></span>
            <p>Foreleser: <?php echo htmlspecialchars($rad1["Svar"], ENT_HTML401 | ENT_COMPAT, 'UTF-8') ?></p></span>
            <p>Gjest: <?php echo htmlspecialchars($rad1["Kommentar"], ENT_HTML401 | ENT_COMPAT, 'UTF-8') ?></p></span>
            <?php } ?>
            <form name='form1' method='POST'>
                <label for='message'><strong>Svar til student:</strong></label>
                <textarea id='message1' name='message1'></textarea><br>
                <select name='test' id='subject'>
                <?php while($rad = mysqli_fetch_array($meldinger_1_conn)) { ?>
                    <option value="<?php echo $rad["Melding_id"];?>"><?php echo $rad["Melding_id"];?></option>
                ?><?php } ?>
                </select>
                <p>Pin koder finner du på: <a href="../doku/dokumentasjon.html">Dokumentasjon</a></p>
                <label for="">Pin Kode: </label>
                <input type='text' name='PIN_text' id='PIN_text' placeholder="PIN">
                <input type='submit' value='submit' onclick='return IsEmpty()' name='submit'>
            </form>
            
</body>
</html>