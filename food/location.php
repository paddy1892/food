<!DOCTYPE HTML>
<!--
        Snapshot by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
                    <li><a href="location.php" class="active"><span class="icon fa-map-marker">
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
                            <h1>Find Us</h1>
                        </header>

                        <div id="map" style="width:400px; height: 400px;"></div>

                        <script>
                            function myMap() {
                                var mapOptions = {
                                    center: new google.maps.LatLng(54.575083, -5.916457),
                                    zoom: 10,
                                    mapTypeId: google.maps.MapTypeId.HYBRID
                                }
                                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                            }
                        </script>
                    </div>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsTpfYdq75PxNS2HqrdsdDKkZRuZGspRQ&callback=myMap"></script>
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
            </section>
                    </div>

                <!-- Footer -->
                <footer id="footer">
                    <div class="copyright">
                        &copy; Untitled Design: <a>Café Ormo</a> Images: <a href="https://unsplash.com/">Unsplash</a>.
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