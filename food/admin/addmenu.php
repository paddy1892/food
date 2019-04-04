<?php
session_start();

if(!isset($_SESSION["food_40155617"]))
{
    header("Location: login.php");
}
?>

<html>
    <head>
        <title>Menu - Café Ormo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <body>
        <div class="page-wrap">
            <!-- Main -->
            <section id="main">

                <!-- Header -->
                <header id="header">
                    <div><a href="index.php" class="logo">Admin Home</a></div>
                </header>

                <!-- Section -->
                <section>
                    <div class="inner">
                        <header>
                            <h1>Add to the Menu</h1>
                        </header>

                        <form action="addmenudata.php" method="post">

                            <div class="addmenu">

                                <label for="username">Name of dish:</label>
                                <input class="ubox" type="text" name="dishname" id="dishname" required/>
                                <div id="uname"></div><br>

                                <label for="password">Description:</label>
                                <input class="pbox" type="text" name="dishdescription" id="description"  required/>
                                <div id='pword'></div>

                                <br><label for="price">Price:</label>
                                <input class="pricebox" type="text" name="dishprice" id="price" required/>


                            </div>

                            <input class="menu-button" type="submit" value="Add Dish"/>

                        </form>
                    </div>
                </section>

              
               
                <!-- Footer -->
                <footer id="footer">
                    <div class="copyright">
                        &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
                    </div>
                </footer>
            </section>
        </div>

        <!-- Scripts -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.poptrox.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>