<?php
include_once 'includes/dbh.inc.php';
$emner = "SELECT * FROM Emner";
$emner_conn = $conn->query($emner);
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
    </style>
    <meta charset="UTF-8">
    <script src="../js/signup_foreleser.js"> </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav> 
            <a href="signup_student.php">student innlogging</a>
        </nav>
    </header>

    <main>
        <section>
                <h1>Foreleser</h1><br>
                <form name="form1" action="includes/signup_foreleser.inc.php" method="post" enctype="multipart/form-data">
                <p>Firstname:</p>
                <input type="text" name="first" id="first_id" placeholder="Firstname"><br>
                <p>Surname:</p>
                <input type="text" name="last" id="last_id" placeholder="Surname"><br>
                <p>Email:</p>
                <input type="text" name="email" id="email_id" placeholder="Email"><br>
                <p>Emner</p>
                <select name="emner" id="emner_id">
                    <?php while($rad = mysqli_fetch_array($emner_conn)) { ?>
                    <option value="<?php echo $rad["Emne_id"];?>"><?php echo $rad["Emnenavn"];?></option>
                    <?php } ?>
                </select>
                <p>Profile picture:</p>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <p id="req">Password must contain atleast eight characters, one uppercase letter, one lowercase letter, one number and one special character</p>
                <input type="password" name="pwd" id="pwd_id" placeholder="Password"><br>
                <p>Pin koder finner du på: <a href="../dokumentasjon.html">Dokumentasjon</a></p>
                <label for="">Pin Kode: </label>
                <input type="number" name="pin" placeholder="PIN">
                <a><input type="submit" value="Upload Image" onclick="return IsEmpty()" name="submit"></a>
            </form>
    </main>
    </body>
</html>