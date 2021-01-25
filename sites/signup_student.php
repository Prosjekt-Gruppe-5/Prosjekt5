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
                <?php while($rad = mysqli_fetch_array($Studieretning_conn)) { ?>
                    <option value="<?php echo $rad["id_Studieretning"];?>"><?php echo $rad["Studieretning_navn"];?></option>
                <?php } ?>
                </select>
                <p>Password:</p>
                <input type="password" name="pwd" id="pwd_id" placeholder="Password"><br>
                <a><input type="submit" onclick="return IsEmpty()" name="submit"></a>
            </form>
    </main>
    <script type="text/javascript">
            function IsEmpty() {
                var first1 = document.forms["form1"]["first"].value;
                if (first1 == "") {
                    alert("Name must be filled out");
                    return false;
                }

                var last1 = document.forms["form1"]["last"].value;
                if (last1 == "") {
                    alert("Surname must be filled out");
                    return false;
                }

                var email1 = document.forms["form1"]["email"].value;
                if (email1 == "") {
                    alert("Email must be filled out");
                    return false;
                }

                var pwd1 = document.forms["form1"]["pwd"].value;
                if (pwd1 == "") {
                    alert("Password must be filled out");
                    return false;
                }
                var kull1 = document.forms["form1"]["kull"].value;
                if (kull1 == "") {
                    alert("Kull must be filled out");
                    return false;
                }
                //var emne1 = document.forms["form1"]["emne"].value;
                //if (emne1 == "") {
                //    alert("Emne must be chosen");
                //    alert("YOU WERE THE CHOSEN ONE, ANAKEN!!!")
                //    return false;
                //}
            }        
        </script>
    </body>
</html>