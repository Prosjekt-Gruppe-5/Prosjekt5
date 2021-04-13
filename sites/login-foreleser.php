<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login-foreleser</title>
    <script src="../js/pin.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div id="nav">
    <a href="../index.php">Hjem</a>
    <a href="../dokumentasjon.html">Dokumentasjon</a>   
</div>

    <div class="wrapper">
        <h2>Login for foreleser</h2>
        <form action="includes/login-forelser.inc.php"  method="POST">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="">
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Passord</label>
                <input type="password" name="password" class="form-control">
            </div>
            <p>Pin koder finner du på: <a href="../dokumentasjon.html">Dokumentasjon</a></p>
            <label for="">Pin Kode: </label>
            <input type="number" name="pin" placeholder="PIN">
            <div class="form-group">
                <input type="submit" onclick='return Pin()' class="btn btn-primary" value="Login">
            </div>
            <p>Er du student? <a href="login.php">Student for login</a></p>
            <p>Har ikke bruker? <a href="signup_foreleser.php">Registrer deg nå</a>.</p>
        </form>
    </div>    
</body>
</html>
