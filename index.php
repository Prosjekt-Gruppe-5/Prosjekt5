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
        </div>
        </div>

</body>
</html>

