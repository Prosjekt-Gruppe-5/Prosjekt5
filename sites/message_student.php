<?php
session_start();
//block all users execpt student
if(!isset($_SESSION["loggedin_student"])){
    header("location: ../index.php");
    exit;
}
 

include_once "includes/dbh.inc.php";

//Inserts messages for text area to db
if(isset($_POST["submit"])) 
            {
        $sql = sprintf("INSERT INTO meldinger (Meldingstekst, Emne_id) VALUES ('%s', '%d')",
                        $conn->real_escape_string($_POST["message1"]),
                        $conn->real_escape_string($_POST["emneid"])
                        
                       );
            $conn->query($sql);
            header("Location: message_student.php");
            //var_dump($conn);
            }
//Gets foreleser info from foreleser view           
$foreleser = "SELECT * FROM foreleser_view";
$foreleser_conn = $conn->query($foreleser);
//Gets emne info from emne view      
$emner = "SELECT * FROM emner_view";
$emner_conn = $conn->query($emner);
//Gets melding info from melding view      
$meldinger = "SELECT * FROM meldinger_view";
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
        //Checks for subject then shows subject
        if(ISSET($_GET['subject']) && $_GET['subject'] != '0'){
           
            echo"
            <h2>Emner:". $emner = $rad['Emnenavn']." </h2>";
            echo"
            <form name='form1' onsubmit='return filter()' method='POST'>
                <label for='message'><strong>Melding til foreleser:</strong></label>
                <textarea id='message1' name='message1'></textarea>
                <input hidden name='emneid' id='messageSubject' value=" . $_GET["subject"] . "><br>
                <p>Pin koder finner du på: <a href='../doku/dokumentasjon.html'>Dokumentasjon</a></p>
                <label for=''>Pin Kode: </label>
                <input type='text' name='PIN_text' id='PIN_text' placeholder='PIN'>
                <input type='submit' value='submit' onclick='return IsEmpty()' name='submit'>
            </form>"?>

            <p><strong>Alle meldinger: </strong></p>
            
            <!-- show db info from meldinger_view with a filterion that makes script/html/css tags invalid -->
            <?php while($rad1 = mysqli_fetch_array($meldinger_conn)) {?>
            <p>Melding ID: <?php echo $rad1["Melding_id"] ?></p></span>
            <p>Student: <?php echo htmlspecialchars($rad1["Meldingstekst"], ENT_HTML401 | ENT_COMPAT, 'UTF-8') ?></p></span>
            <p>Foreleser: <?php echo htmlspecialchars($rad1["Svar"], ENT_HTML401 | ENT_COMPAT, 'UTF-8') ?></p></span>
            <p>Gjest: <?php echo htmlspecialchars($rad1["Kommentar"], ENT_HTML401 | ENT_COMPAT, 'UTF-8') ?></p></span>
            <?php }} ?>
            
    
</body>
</html>