<?php
session_start();
include_once 'sites/includes/dbh.inc.php';
$foreleser = "SELECT * FROM foreleser";
$foreleser_conn = $conn->query($foreleser);

$emner = "SELECT * FROM Emner";
$emner_conn = $conn->query($emner);
?>

<!DOCTYPE html>
<html>

<head>
    <title>HIØ meldingssystem</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>
    <div id="wrapper">

        <div id="nav">
            <a href="index.php">Hjem</a>
            <?php
        				  if (isset($_SESSION['loggedin'])) {
        					  echo '<form action="sites/includes/logout.inc.php" method="POST">
        						  <button type="submit" name="submit">Logout</button>
        					  </form>';
        				  } else {
                              echo '<span class="regis"><a href = "sites/login.php">Login</a></span>
                              <span class="regis"><a href = "sites/signup_student.php">Registrer</a></span>';
        				  }
        			  ?>
        </div>


        <div id="featured-content">
            <form action='index.php' method='get'>
                <label for='subject'><strong>Emne:</strong></label>

                <select name='subject' id='subject'>
                <?php while($rad = mysqli_fetch_array($emner_conn)) { ?>
                    <option value="<?php echo $rad["Emne_id"];?>"><?php echo $rad["Emnenavn"];?></option>
                    ?><?php } ?>
                </select>

                <input type='submit' value='Velg'>
            </form>

            <?php 
                if(ISSET($_GET['subject']) && $_GET['subject'] != '0') {
                    echo "
                    <h2>" . $emner = $_GET['subject']['Emnenavn'] . "<h2>
                    <p><strong>Foreleser: </strong>" . $rad1 = mysqli_fetch_array($foreleser_conn); $rad1['Fornavn'] . "</p>
                  
                    <form action='index.php' method='post' id='messageForm'>
                        <input type='hidden' name='messageSubject' id='messageSubject' value=" . $_GET['subject'] . ">
                        <label for='message'><strong>Melding til foreleser:</strong></label>
                        <textarea id='message' name='message'></textarea>
                        <input type='submit' value='Send'>
                    </form>

                    <p><strong>Alle meldinger: </strong></p>
                    ";

                    foreach($mockDBSubjects[$_GET['subject']]['messages'] as $message) {
                        echo "<div id='messageBox'><p>" . $message . "</p></div>";
                    }
                }
            ?>

            <?php
                if(ISSET($_POST['message'])) {
                    echo "<p><strong>Melding sendt for emne: </strong>" . $mockDBSubjects[$_POST['messageSubject']]['name'] . "</p>
                    <p><strong>Din melding: </strong>" . $_POST['message'] . "</p>";
                }
            ?>
            
        </div>

    </div>
</body>
</html>
