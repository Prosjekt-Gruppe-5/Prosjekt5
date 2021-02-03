<?php
//Mock "database" for testing av funksjonalitet, som må byttes ut med ekte DB når denne er oppe
    $mockDBSubjects = array(
        '1' => array(
            'name' => 'Testemne 1',
            'lecturer' => 'Per Pettersen',
            'messages' => array(
                'Første testmelding for emne 1',
                'Andre testmelding for emne 1',
                'Tredje testmelding for emne 1'
            ),
        ),

        '2' => array(
            'name' => 'Testemne 2',
            'lecturer' => 'Gunn Gundersen',
            'messages' => array(
                'Første testmelding for emne 2',
                'Andre testmelding for emne 2',
                'Tredje testmelding for emne 2'
            ),
        ),

        '3' => array(
            'name' => 'Testemne 3',
            'lecturer' => 'Ole Olsen',
            'messages' => array(
                'Første testmelding for emne 3',
                'Andre testmelding for emne 3',
                'Tredje testmelding for emne 3'
            ),
        )
        );
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

            <span class="regis"><a href = "sites/signup_student.php">Registrer</a></span>
            <span class="regis"><a href = "sites/login.php">Login</a></span>
        </div>


        <div id="featured-content">
            <form action='index.php' method='get'>
                <label for='subject'><strong>Emne:</strong></label>

                <select name='subject' id='subject'>
                    <option value='0' disabled='true' selected='true'>-- Velg emne --</option>
                    <?php 
                        foreach($mockDBSubjects as $key => $value) {
                            echo "
                            <option value=" . $key . ">" . $mockDBSubjects[$key]['name'] . "</option>
                            ";
                        }
                    ?>
                </select>

                <input type='submit' value='Velg'>
            </form>

            <?php 
                if(ISSET($_GET['subject']) && $_GET['subject'] != '0') {
                    echo "
                    <h2>" . $mockDBSubjects[$_GET['subject']]['name'] . "</h2>
                    <p><strong>Foreleser: </strong>" . $mockDBSubjects[$_GET['subject']]['lecturer'] . "</p>
                  
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

