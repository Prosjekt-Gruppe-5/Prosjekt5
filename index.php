<?php

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
         <?php
                  if (isset($_SESSION['loggedin_student'])) {
                    echo '<span class="regis"><a href = "sites/message_student.php">Message_student</a></span>';
                  } else if (isset($_SESSION['loggedin_foreleser'])){
                      echo '<span class="regis"><a href = "sites/message_foreleser.php">Message_foreleser</a></span>';
                  }else{
                    echo '<span class="regis"><a href = "sites/message_gjest.php">Message_gjest</a></span>';
                  }
              ?>
              <a href="dokumentasjon.html"></a>     
        </div>
        </div>

</body>
</html>

