<!DOCTYPE html>
<html>
    <head>
        <title> ...</title>
        
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
            <form id = "registrer">
                <div class="login-box">
                    <h1>Registrer</h1>
                    <!--Brukernavn-->
                    <div class="textbox">
                        <input type="text" placeholder="Brukernavn" name="" value="" required>
                    </div>
                    <!--End brukernavn-->

                    <!--E-post-->
                    <div class="textbox">
                        <input type="text" placeholder="E-post" name="" value="" required>
                    </div>
                    <!--End e-post-->

                    <!--Telefonnummer-->
                    <div class="textbox">
                        <input type="text" placeholder="Telefonnummer" name="" value="" required>
                    </div>
                    <!--End telefonnummer-->
        
                    <!--Passord-->
                    <div class="textbox">
                        <input type="password" placeholder="Passord" name="" value="" required> 
                    </div>

                    <!--Bekreft passord-->
                    <div class="textbox">
                        <input type="password" placeholder="Bekreft passord" name="psw-repeat" required>
                    </div>
                    <!--End bekreft passord-->

                    <p class="togp">By creating an account you agree to our <a href="#" style="color:white">Terms & Privacy</a>.</p>
        
                    <button class="btn" onclick = "alertMessage()">Registrer</button>
                    
                    <script src="js/registrer.js"></script>

                    <!--End passord-->

                </div>   
               
            </form>
            <!--End Innlogging-->     
       
        
        </div>
    </body>
</html>