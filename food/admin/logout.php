<?php
session_start();

if(!isset($_SESSION["food_40155617"]))
{
    header("Location: login.php");
}

?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Admin Menu</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="stylesheet" href="https://gitcdn.link/repo/Chalarangelo/mini.css/master/dist/mini-default.min.css">
        <link href="styles/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/main.css">


        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>

        <script>
            jQuery(document).ready(function () {

            });
        </script>

    </head>

    <body>	

        <header class="sticky">
            <a href="index.php" class="logo">Café Ormo - Admin</a>
        </header>
        <div class="container">

            <div class="col-sm-12 col-md-12  col-lg-12 ">


                <div class="section">

                    <h1>Admin Menu - Login</h1><br>
                    <p><b>Please login to your admin account:</b></p>

                    <form action="sign.php" method="POST">
                        <legend>
                            <label>Username:</label>
                            <input  name="userfield" type="text" required="required" value="" placeholder="username"><span id="help">Valid username required</span><br/>
                        
                        
                            <label>Password:</label>
                            <input name="passfield" type="password" required="required" value="" placeholder="password"><span id="help"> Valid password required</span><br/>
                        
                       
                            <input id="but" name="submit" type="submit" value="Login">	
                        </legend>	
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>