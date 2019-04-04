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
                            <h1>Add a Starter</h1>
                        </header>

                        <form action="addstarterdata.php" method="post">

                            <div class="addstarter">

                                <label for="username">Name of starter:</label>
                                <input class="ubox" type="text" name="startername" id="startername" required/>
                                <div id="uname"></div><br>

                                <label for="password">Description:</label>
                                <input class="pbox" type="text" name="starterdescription" id="description"  required/>
                                <div id='pword'></div>

                                <br><label for="price">Price:</label>
                                <input class="pricebox" type="text" name="starterprice" id="price" required/>


                            </div>

                            <input class="menu-button" type="submit" value="Add Starter"/>

                        </form>
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.poptrox.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>