<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HIØ meldingssystem</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">

<?php 
//var_dump($_POST); 
?>

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

   
</body>
</html>