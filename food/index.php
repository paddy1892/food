<!DOCTYPE HTML>


<html>
    <head>
        <title>Café Ormo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <script>
            jQuery(document).ready(function () {

                console.log('jquery engine loaded');

                jQuery('form').submit(function(e))

                 
            });
        </script>

    </head>
    <body>
        <div class="page-wrap">

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="index.php" class="active"><span class="icon fa-home">
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

                <!-- Banner -->
                <section id="banner">
                    
                    <div class="inner">
                        <h1>Welcome to Café Ormo</h1>
                        <p>Click here for our <a href="menu.php">MENU</a></p>
                        <ul class="actions">
                            <li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
                        </ul>

                    </div>

                </section>

                <!-- Gallery -->
                <section id="galleries">

                    <!-- Photo Galleries -->
                    <div class="gallery">
                        <header class="special">
                            <h2>What's New</h2>
                        </header>
                        <div class="content">
                              <a href="images/pizza.jpg"><img src="images/pizza.jpg" alt="" title="Pizza" /></a>
                            </div>
                            <div class="media">
                                <a href="images/spaghetti.jpg"><img src="images/spaghetti02.jpg" alt="" title="Spaghetti." /></a>
                            </div>
                            <div class="media">
                                <a href="images/rice.jpg"><img src="images/rice.jpg" alt="" title="Bowl of rice" /></a>
                            </div>
                            <div class="media">
                                <a href="images/spaghetti02.jpg"><img src="images/spaghetti03.jpg" alt="" title="Spaghetti Carbonara." /></a>
                            </div>
                            <div class="media">
                                <a href="images/soup.jpg"><img src="images/soup.jpg" alt="" title="Soup of the Day." /></a>
                            </div>
                            <div class="media">
                                <a href="images/noodles.jpg"><img src="images/noodles.jpg" alt="" title="Noodles" /></a>
                            </div>
                            <div class="media">
                                <a href="images/sandwich.jpg"><img src="images/sandwich.jpg" alt="" title="Sandwich" /></a>
                            </div>
                            <div class="media">
                                <a href="images/wine.jpg"><img src="images/wine.jpg" alt="" title="A selection of wine" /></a>
                            </div><div class="media">
                                <a href="images/pizza.jpg"><img src="images/pizza.jpg" alt="" title="Pizza" /></a>
                            </div>
                            <div class="media">
                                <a href="images/spaghetti.jpg"><img src="images/spaghetti02.jpg" alt="" title="Spaghetti." /></a>
                            </div>
                            <div class="media">
                                <a href="images/rice.jpg"><img src="images/rice.jpg" alt="" title="Bowl of rice" /></a>
                            </div>
                            <div class="media">
                                <a href="images/spaghetti02.jpg"><img src="images/spaghetti03.jpg" alt="" title="Spaghetti Carbonara." /></a>
                            </div>
                            <div class="media">
                                <a href="images/soup.jpg"><img src="images/soup.jpg" alt="" title="Soup of the Day." /></a>
                            </div>
                            <div class="media">
                                <a href="images/noodles.jpg"><img src="images/noodles.jpg" alt="" title="Noodles" /></a>
                            </div>
                            <div class="media">
                                <a href="images/sandwich.jpg"><img src="images/sandwich.jpg" alt="" title="Sandwich" /></a>
                            </div>
                            <div class="media">
                                <a href="images/wine.jpg"><img src="images/wine.jpg" alt="" title="A selection of wine" /></a>
                            </div>
                        </div>
                        <footer>
                            <a href="gallery.php" class="button big">Full Gallery</a>
                        </footer>
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
                    <a href="admin/login.php" id="adminlogin"/>Administrator Login</a>
                        
                    
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