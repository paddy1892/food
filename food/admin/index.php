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
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>

    <body>	

        <header class="sticky">
            <a href="index.php" class="logo">Café Ormo - Admin</a>
        </header>
        
        <div id="butpos">
            <a href="logout.php">Log-out</a>
        </div>
        
        <?php
        $name = $_SESSION["food_40155617"];
        echo "<p><b> Logged in as: $name </b></p>";
        ?>
        
        <div class="container">

            <div class="col-sm-12 col-md-12  col-lg-12 ">


                <div class="section">

                    <h1>Admin Menu</h1>

                    <div class="row">

                    <div class='card large'>
                         <a href='addmenu.php'>
                            <div class='section'>
                                <h3>Add to the Menu </h3>
                                <p>Adding a new dish to the menu.</p>
                            </div>
                    </a>
                        </div>
                         <div class='card large'>
                         <a href='addstarter.php'>
                            <div class='section'>
                                <h3>Add a Starter </h3>
                                <p>Adding a new starter to the menu.</p>
                            </div>
                         </a>
                        </div>
                        <div class='card large'>
                            <a href='editmenulist.php'>
                                <div class='section'>
                                    <h3>Edit the Menu</h3>
                                    <p>Edit a dish on the menu</p>
                                </div>
                            </a>
                        </div>

                        <div class='card large'>
                            <a href='deletemenulist.php'>
                            <div class='section'>
                                <h3>Delete a Dish </h3>
                                <p>Delete a dish on the menu.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>