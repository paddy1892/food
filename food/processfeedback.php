<?php
$feedbacknamedata = $_POST["feedbackname"];
$feedbackemaildata = $_POST["feedbackemail"];
$feedbackcommentdata = $_POST["feedbackcomment"];

include("connect.php");

$queryinsert = "INSERT INTO foodfeedback (id, name, email, comment) VALUES (null, '$feedbacknamedata', '$feedbackemaildata', '$feedbackcommentdata')";

$result = mysqli_query($conn, $queryinsert) or die(mysqli_error($conn));
?>


<html>
    <head>
        <title>Location - Café Ormo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div class="page-wrap">

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="index.php"><span class="icon fa-home">
                                Home</span></a></li>
                    <li><a href="gallery.php"><span class="icon fa-camera-retro">                                                    
                                Gallery</span></a></li>
                    <li><a href="menu.php"><span class="icon fa-cutlery">
                                Menu</span></a></li>
                    <li><a href="login.php"><span class="icon fa-sign-in">
                                Login</span></a></li>
                    <li><a href="location.php"><span class="icon fa-map-marker">
                                Location</span></a></li>
                </ul>
            </nav>

            <!-- Main -->
            <section id="main">

                <!-- Header -->
                <header id="header">
                    <div>Café Ormo</div>
                </header>

                <!-- Section -->
                <section>
                    <div class="inner">
                        <header>
                            <?php
                            echo "<h1>Thanks $feedbacknamedata for your feedback! We look forward to reading your comments.</h1>"
                            ?>
                        </header>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact">
                    <!-- Social -->
                    <div class="social column">
                        <h3>About Us</h3>
                        <p>One of Belfast's most well known restaurant's, Café Ormo serves a range of food that cater to all tastes.</p>
                        <p>Take a look at our menu to see some of the delicious food we serve. Or even take a scroll through our online gallery to see for yourself how good our food looks!</p>
                        <h3>Follow Us</h3>
                        <ul class="icons">
                            <li><a href="www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="www.instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul>
                    </div>

                    <!-- Form -->
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <div class="copyright">
                        &copy; Untitled Design: <a href="index.php">Café Ormo</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
                    </div>
                </footer>
            </section>
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>

