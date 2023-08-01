<?php session_start();?>
<?php include "includes/alerts.php"?>
<?php include "header.php"?>
<title>Contact Us | Orchid-Lekki Chess Club</title>
    <div class="container-fluid cont-banner">
        <h1>Contact Us</h1>
    </div>
    <div class="container-fluid cont-body1">
        <div class="container">
            <div class="cont-flex-cont1">
                <div class="item1">
                    <h1>Get in touch with us</h1>
                    <div class="address-cont">
                        <h3>Address:</h3>
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                            Orchid Hotels, Plot 3 DreamWorld <br>
                            Africana Way, Ikota-Lekki. <br> Lagos
                        </p>
                    </div>
                    <div class="phone-cont">
                        <h3>Phone Number:</h3>
                        <i class="fas fa-phone-alt"></i>
                        <p>
                            08113936417, 08033106208, 08096602599
                        </p>
                    </div>
                    <div class="email-cont">
                        <h3>Email Address:</h3>
                        <i class="fas fa-envelope"></i>
                        <p>
                            info@olchessclub.com
                        </p>
                    </div>
                </div>
                <div class="item2">
                    <div class="form-cont">
                        <h3>Send Us a Message</h3>
                        <form action="process/processcontact.php" method="post">
                                    <?php success_alert();error_alert();?>
                            <div class="name-input-cont">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="phone-input-cont">
                                <input type="text" name="number" placeholder="Your Phone Number">
                            </div>
                            <div class="email-input-cont">
                                <input type="email" name="email" placeholder="Your Email Address">
                            </div>
                            <div class="email-input-cont">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="msg-input-cont">
                                <textarea name="message" placeholder="Your Message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-btn-cont">
                                <input type="submit" value="Submit" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126867.65631143992!2d3.4736031582031157!3d6.443550199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf738e3bdef31%3A0x584502d834a20356!2sOrchid%20Lekki%20Chess%20Club!5e0!3m2!1sen!2sng!4v1601909220409!5m2!1sen!2sng"
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
    <div class="foot-banner">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact-cont">
                            <h5>CONTACT US</h5>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Orchid Hotels, Plot 3 DreamWorld <br>
                                Africana Way, Ikota-Lekki.
                                Lagos</p>
                            <i class="fas fa-phone-alt"></i>
                            <p>
                                08113936417, 08033106208, 08096602599
                            </p>
                            <i class="fas fa-envelope"></i>
                            <p>info@chessclub.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-cont">
                            <h5>INFORMATION</h5>
                            <ul>
                                <li><a href="store.php">Store</a></li>
                                <li><a href="register.php">Register Now</a></li>
                                <li><a href="team.php">Our Team</a></li>
                                <li><a href="vacancy.php">Openings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="quick-cont">
                            <h5>QUICK LINKS</h5>
                            <ul>
                                <li><a href="about-us.php">About OLCC</a></li>
                                <li><a href="membership.php">OLCC Membership</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="http://www.orchidhotelsgroup-ng.com/" target="_blank">Orchid Hotel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sub-cont">
                            <h5>SUBSCRIBE</h5>
                            <div class="input-email-cont">
                                <label>Enter Your Email Here</label>
                                <input type="email" name="email" id="">
                            </div>
                            <div class="sub-now-btn">
                                <button>SUBSCRIBE NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copy-right">
            <p>© 2023 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100, // offset (in px) from the original trigger point
            duration: 1500
        });
    </script>
    <script src="js/index.js"></script>
</body>

</html>