<?php
include_once 'includes/dbh.inc.php';
$studieretning = "SELECT * FROM studieretning_view";
$studieretning_conn = $conn->query($studieretning);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
    body{
        margin: 0;
        background-color: hsla(0, 0%, 43%, 0.83);
    }
    form{
        margin: 5rem;
        text-align: center;
    }
    input{
        font-family: 'Rubik', sans-serif;
        font-size: 1.2em;
        border-radius: 4px;
    }
    p{
        font-family: 'Rubik', sans-serif;
        font-size: 1.2em;
    }
    nav{
        background-color: hsl(0, 0%, 43%);
    }
    a{
        text-decoration: none;
        font-size: 1.6em;
    }
    #req{
        font-family: 'Rubik', sans-serif;
        font-size: 1em;
        width: 300px;
        text-align: center;
        margin: 0 auto;
    }
    </style>
    <meta charset="UTF-8">
    <script src="../js/signup_student.js"> </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="signup_foreleser.php">Foreleser innlogging</a>
        </nav>
    </header>

    <main>
        <section>
                <h1>Student</h1><br>
                <form name="form1" action="includes/signup_student.inc.php" method="POST">
                <p>Firstname:</p>
                <input type="text" name="first" id="first_id" placeholder="Firstname"><br>
                <p>Surname:</p>
                <input type="text" name="last" id="last_id" placeholder="Surname"><br>
                <p>Email:</p>
                <input type="text" name="email" id="email_id" placeholder="Email"><br>
                <p>Kull:</p>
                <input type="number" name="kull" id="kull_id" min="2021" max="2022"><br>
                <select name="Studieretning" id="Studieretning_id">
                <?php while($rad = mysqli_fetch_array($studieretning_conn)) { ?>
                    <option value="<?php echo $rad["Studieretning_id"];?>"><?php echo $rad["Studieretningnavn"];?></option>
                <?php } ?>
                </select>
                <p id="req">Password must contain atleast eight characters, one uppercase letter, one lowercase letter, one number and one special character</p>
                <input type="password" name="pwd" id="pwd_id" placeholder="Password"><br>
                <p>Pin koder finner du på: <a href="../doku/dokumentasjon.html">Dokumentasjon</a></p>
                <label for="">Pin Kode: </label>
                <input type="number" name="pin" placeholder="PIN">
                <a><input type="submit" onclick="return IsEmpty()" name="submit"></a>
            </form>
    </main>
    </body>
</html>