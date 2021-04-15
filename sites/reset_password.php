<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Bytt passord</h2>
        <?php if (isset($_SESSION["loggedin_foreleser"])) {
            echo'<form action="includes/reset_pass_foreleser.inc.php" method="POST">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
            </div>
            <div class="form-group>
                <label>Bekreft passord</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="../index.php">Cancel</a>
            </div>
        </form>';
        }else if(isset($_SESSION["loggedin_student"])){
                echo'<form action="includes/reset_pass_student.inc.php" method="POST">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
            </div>
            <div class="form-group>
                <label>Bekreft passord</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="../index.php">Cancel</a>
            </div>
        </form>';
            } else{
                echo '<H1>Du er ikke logget inn</H1>';
            }
        ?>
    </div>    
</body>
</html>
