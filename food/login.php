<html>
    <head>
        <title>Login - Café Ormo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <script>
            jQuery(document).ready(function () {

                $("form").validate();

                console.log('jquery engine loaded');

                jQuery('form').submit(function (e) {
                    var inp = $("#username").val();
                    inp = jQuery.trim(inp);
                    var inp2 = $("#password").val();
                    inp = jQuery.trim(inp2);

                    if (inp.length <= 0)
                    {
                        e.preventDefault(); //prevent default form submit
                        jQuery("#uname").text('Please enter your username');
                    }
                    if (inp2.length <= 0)
                    {
                        e.preventDefault(); //prevent default form submit
                        jQuery("#pword").text('Please enter your password');
                    }
                });
            });


        </script>


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
                    <li><a href="login.php" class="active"><span class="icon fa-sign-in">
                                Login</span></a></li>
                    <li><a href="location.php"><span class="icon fa-map-marker">
                                Location</span></a></li>
                </ul>
            </nav>

            <section id="main">

                <header id="header">
                    <div>Café Ormo</div>
                </header>

                <!-- Section -->
                <section>
                    <div class="inner">


                        <form action="processlogindata.php" method="post">

                            <div class="login">
                                <fieldset>

                                    <br><legend>Login to your account</legend>

                                    <label for="username">Username:</label>
                                    <input class="ubox" type="text" name="username" required/>
                                    <div id="uname"></div>

                                    <label for="password">Password:</label>
                                    <input class="pbox" type="text" name="password" id="pword"  required/>
                                    <div id='pword'></div>
                                </fieldset>
                            </div>

                            <input class="login-button" type="submit" value="Submit"/>
                        </form>
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
                        &copy; Untitled Design: <a href="index.php">Café Ormo</a>.
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







