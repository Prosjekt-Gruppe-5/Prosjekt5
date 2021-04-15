<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kildekode</title>
</head>

<body>
    <div id="wrapper">

        <div id="nav">
            <a href="../index.php">Hjem</a>
            <a href="dokumentasjon.html">Dokumentasjon</a>   
        </div>


        <div id="container">
            <p>
                <code>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <h1>Php external script (Folder: includes)</h1>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>DB CONN</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <?php
                    show_source("../sites/includes/dbh.inc_exe.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE signup_student</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/signup_student.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE login_student</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/login-student.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE signup_foreleser</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/signup_foreleser.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE login_foreleser</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/login-forelser.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE logout</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/logout.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE Reset password student</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/reset_pass_student.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE Reset password foreleser</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/reset_pass_foreleser.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE Upload</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/includes/upload.inc.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h1>Main Site source code (Folder: sites)</h1>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE signup_student</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/signup_student.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE login_student</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/login.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE signup_foreleser</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/signup_foreleser.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE login_foreleser</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/login-foreleser.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE reset_pass</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/reset_password.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    
                    <h2>PHP CODE Message_student</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/message_student.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE Message_foreleser</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/message_foreleser.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE Message_gjest</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../sites/message_gjest.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>PHP CODE Homepage</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../index.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>HTML CODE Documention</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("dokumentasjon.html");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <!-- Let's get meta -->
                    <h2>PHP CODE Source code</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("kildekode.php");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h1>JS Source code</h1>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>JS CODE Empty (validation guest message)</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../js/empty.js");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>JS CODE Empty_student (validation student message)</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../js/empty_student.js");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>JS CODE Empty_foreleser (validation foreleser message)</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../js/empty_foreleser.js");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>JS CODE pin (validation guest message pin kode)</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php 
                    show_source("../js/pin.js");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>JS CODE signup_student (validation signup_student)</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../js/signup_student.js");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h2>JS CODE signup_foreleser (validation signup_foreleser)</h2>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../js/signup_foreleser.js");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>

                    <h1>CSS Source code</h1>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                    <?php
                    show_source("../styles/style.css");
                    ?>
                    <h2>------------------------------------------------------------------------------------------------------------------------------------------</h2>
                </code>
                

            </p>
           
            
        </div>

    </div>
</body>
</html>