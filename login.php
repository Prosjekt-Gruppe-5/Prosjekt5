<!DOCTYPE html>
<html>
    <head>
        <title> .... </title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
       
    </head>
    <body>
    <div id = "wrapper">

        <div id="nav">
            <a href="index.html">Hjem</a>
            
            <span class="regis"><a href = "registrer.html">Registrer</a></span>
            <span class="regis"><a href = "login.html">Login</a></span>
        </div>

        
                   <!--Innlogging-->     
        
            <form id = "login">
                <div class="login-box">
                    <h1>Login</h1>
                    <!--Brukernavn-->
                    <div class="textbox">
                        <input type="text" placeholder="Brukernavn" name="" value="" required>
                    </div>
                    <!--End brukernavn-->
        
                    <!--Passord-->
                    <div class="textbox">
                        <input type="password" placeholder="Passord" name="" value="" required> 
                    </div>
        
                    <button class="btn" onclick = "alertMessage()">Login</button>
 
                    <script src="js/login.js"></script> 
                   

                    <!--End passord-->
        
                    <span class="psw">Glemt passord?</span>

                </div>   
               
            </form>
            <!--End Innlogging--!>
        
        </div>
    </body>
</html>