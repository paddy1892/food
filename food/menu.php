<?php
include("connect.php");
include("password.php");

$query = "SELECT * FROM foodmenu";
$query2 = "SELECT * FROM foodstarters";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
?>

<html>
    <head>
        <title>Menu - Café Ormo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"/>
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
                    <li><a href="menu.php" class="active"><span class="icon fa-cutlery">
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
                            <h1>Menu</h1>
                        </header>


                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            //looped code
                            $namedata = $row["name"];
                            $pricedata = $row["price"];
                            $descriptiondata = $row["description"];
                            $myid = $row["id"];

                            echo "<section class='columns double'>
                            <div class='pure-u-1-1'>
                                <span class='image left special'>
                                <h2>$namedata £$pricedata</h2>
                                <p>$descriptiondata</p>
                        </div>
                        </section>";
                        }
                        ?>


                        <header>
                            <h1>Starters</h1>
                        </header>

                        <?php
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            //looped code
                            $namedata2 = $row2["name"];
                            $pricedata2 = $row2["price"];
                            $descriptiondata2 = $row2["description"];
                            $myid2 = $row2["id"];

                            echo "<section class='columns double'>
                                 <div class='pure-u-1-1'>
                                <span class='image left special'>
                                <h2>$namedata2 £$pricedata2</h2>
                                <p>$descriptiondata2</p>
                            </div>
                        </section>";
                        }
                        ?>



                    </div>
                </section>
                <!-- Contact -->




                <section id="contact">
                    <!-- Social -->
                    <div class="social column">
                        <h3>About Me</h3>
                        <p>Mus sed interdum nunc dictum rutrum scelerisque erat a parturient condimentum potenti dapibus vestibulum condimentum per tristique porta. Torquent a ut consectetur a vel ullamcorper a commodo a mattis ipsum class quam sed eros vestibulum quisque a eu nulla scelerisque a elementum vestibulum.</p>
                        <p>Aliquet dolor ultricies sem rhoncus dolor ullamcorper pharetra dis condimentum ullamcorper rutrum vehicula id nisi vel aptent orci litora hendrerit penatibus erat ad sit. In a semper velit eleifend a viverra adipiscing a phasellus urna praesent parturient integer ultrices montes parturient suscipit posuere quis aenean. Parturient euismod ultricies commodo arcu elementum suspendisse id dictumst at ut vestibulum conubia quisque a himenaeos dictum proin dis purus integer mollis parturient eros scelerisque dis libero parturient magnis.</p>
                        <h3>Follow Me</h3>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul>
                    </div>

                    <!-- Form -->
                    <div class="column">
                        <h3>Get in Touch</h3>
                        <form action="processfeedback.php" method="post">
                            <div class="field half first">
                                <label for="name">Name</label>
                                <input name="feedbackname" id="name" type="text" placeholder="Name">
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input name="feedbackemail" id="email" type="email" placeholder="Email">
                            </div>
                            <div class="field">
                                <label for="message">Comment</label>
                                <textarea name="feedbackcomment" id="message" rows="6" placeholder="Comment"></textarea>
                            </div>
                            <ul class="actions">
                                <li><input value="Send Message" class="button" type="submit"></li>
                            </ul>
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>