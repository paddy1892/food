<?php
$starternamedata = $_POST["startername"];
$starterdescdata = $_POST["starterdescription"];
$starterpricedata = $_POST["starterprice"];

include("../connect.php");

$queryinsert = "INSERT INTO foodstarters (id, name, description, price) VALUES (null, '$starternamedata', '$starterdescdata', $starterpricedata)";

$result = mysqli_query($conn, $queryinsert) or die(mysqli_error($conn));
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

                
                <header class='sticky changehead'>
                    <a href="../index.php" class="homebutton">Admin Home</a>
                </header>
                
                </header>
                <!-- Header -->
                <header id="header">
                    <div>Café Ormo</div>
                </header>

                

                    <!-- Section -->
                    <section>
                        <div class="inner">
                            <header>
                                <h1>The Starters have been Updated!</h1>
                            </header>

                            <?php
                            echo "<h2>$starternamedata has been added to the Menu.</h2>"
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
                            <form action="#" method="post">
                                <div class="field half first">
                                    <label for="name">Name</label>
                                    <input name="name" id="name" type="text" placeholder="Name">
                                </div>
                                <div class="field half">
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email" placeholder="Email">
                                </div>
                                <div class="field">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.poptrox.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>