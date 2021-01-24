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
            <a href="signup_student.php">student innlogging</a>
        </nav>
    </header>

    <main>
        <section>
                <h1>Foreleser</h1><br>
                <form name="form1" action="includes/signup_foreleser.inc.php" method="post" enctype="multipart/form-data">
                <p>Username:</p>
                <input type="text" name="uid" id="uid_id" placeholder="Username"><br>
                <p>Firstname:</p>
                <input type="text" name="first" id="first_id" placeholder="Firstname"><br>
                <p>Surname:</p>
                <input type="text" name="last" id="last_id" placeholder="Surname"><br>
                <p>Email:</p>
                <input type="text" name="email" id="email_id" placeholder="Email"><br>
                <p>Emner</p>
                <!-- For at denne skal fungere må man sammenkoble et par tabeller
                <select name="emner" id="emner_id">
                    <?php while($rad = mysqli_fetch_array($emner_conn)) { ?>
                    <option value="<?php echo $rad["id_emne"];?>"><?php echo $rad["emne_navn"];?></option>
                    <?php } ?>
                </select>-->
                <p>Profile picture:</p>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <p>Password:</p>
                <input type="password" name="pwd" id="pwd_id" placeholder="Password"><br>
                <a><input type="submit" value="Upload Image" onclick="return IsEmpty()" name="submit"></a>
            </form>
    </main>
    <script type="text/javascript">
            function IsEmpty() {
                var uid1 = document.forms["form1"]["uid"].value;
                if (uid1 == "") {
                    alert("Username must be filled out");
                    return false;
                }

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
              
                //var emner1 = document.forms["form1"]["emner"].value;
                //if (emner1 == "") {
                //    alert("Emne must be chosen");
                //    alert("YOU WERE THE CHOSEN ONE, ANAKEN!!!")
                //    return false;
                //}
                
                var fileToUpload1 = document.forms["form1"]["fileToUpload"].value;
                if (fileToUpload1 == "") {
                    alert("You have to upload a profile pic");
                    return false;
                }
            }        
        </script>
    </body>
</html>