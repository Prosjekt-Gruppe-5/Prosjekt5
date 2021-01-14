<?php
//Mock "database" for testing av funksjonalitet, som må byttes ut med ekte DB når denne er oppe
    $mockDB = array(
        '1' => array(
            'name' => 'Testemne 1',
            'lecturer' => 'Per Pettersen',
        ),

        '2' => array(
            'name' => 'Testemne 2',
            'lecturer' => 'Gunn Gundersen',
        ),

        '3' => array(
            'name' => 'Testemne 3',
            'lecturer' => 'Ole Olsen',
        )
        );
?>

<!DOCTYPE html>
<html>

<head>
    <title>....</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div id="wrapper">

        <div id="nav">
            <a href="index.php">Hjem</a>

            <span class="regis"><a href = "registrer.php">Registrer</a></span>
            <span class="regis"><a href = "login.php">Login</a></span>
        </div>


        <div id="featured-content">
            <form action='index.php' method='get'>
                <label for='subject'>Emne</label>

                <select name='subject' id='subject'>
                    <option value='0' disabled='true' selected='true'>-- Velg emne --</option>
                    <?php 
                        foreach($mockDB as $key => $value) {
                            echo "
                            <option value=" . $key . ">" . $mockDB[$key]['name'] . "</option>
                            ";
                        }
                    ?>
                </select>

                <input type='submit' value='Velg'>
            </form>

            <?php 
                if(ISSET($_GET['subject']) && $_GET['subject'] != '0') {
                    echo "<p>Emne: " . $mockDB[$_GET['subject']]['name'] . "</p>
                    <p>Foreleser: " . $mockDB[$_GET['subject']]['lecturer'] . "</p>
                    <form action='index.php?subject=" . $_GET['subject'] . "' method='post' id='messageForm'>
                        <input type='hidden' name='messageSubject' id='messageSubject' value=" . $_GET['subject'] . ">
                        <label for='message'>Melding til foreleser</label>
                        <textarea id='message' name='message'></textarea>
                        <input type='submit' value='Send'>
                    </form>
                    ";
                }
            ?>

            <?php
                if(ISSET($_POST['message'])) {
                    echo "<p>Melding sendt for emne: " . $mockDB[$_POST['messageSubject']]['name'] . "</p>
                    <p>Din melding: " . $_POST['message'] . "</p>";
                }
            ?>
            
        </div>

    </div>
</body>
</html>
