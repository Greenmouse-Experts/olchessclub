<?php session_start();?>
<?php include "includes/alerts.php";?>
<?php include "header.php"?>
    <div class="container-fluid reg-body1">
        <div class="container">
            <div class="reg-form-cont">
                <h4>Quaterly Payment For Group Classes:</h4>
                <form id="paymentForm">
                <div class="flash"><?php error_alert();success_alert();?></div>
                    <div class="reg-name-cont">
                        <input type="text" name="name" id="name" placeholder="First Name">
                        <input type="hidden"  id="duration" value="quater">
                    </div>
                    <div class="reg-name-cont">
                        <input type="text" id="code" placeholder="Member ID for members only">
                    </div>
                    <div class="reg-email-cont">
                        <input type="email" id="email" placeholder="Email Address">
                    </div>
                    <div class="reg-name-cont">
                        <input type="text"  id="phone" placeholder="Phone number">
                    </div>
                    <div class="reg-level-cont">
                
                        <select id="type">
                            <option value="">Payment Plan</option>
                            <option value="GM coach member">GM Coach - for Members - ₦85,000</option>
                            <option value="GM coach">GM Coach - for Non-Members -₦110,000</option>
                            <option value="Nigerian coach member">Nigerian Coach (Titled & Experienced) - for Members -₦50,000</option>
                            <option value="Nigerian coach">Nigerian Coach (IM/FM/CM) - for Non-Members - ₦65,000</option>
                        </select>
                        
                    </div>
                    <div class="reg-level-cont">
                        <input type="text" id="amount" placeholder="Appropraite amount">   
                    </div>
                    <div class="reg-btn-cont">
                        <input type="submit" value="PAY" class="btn btn-danger" onclick=" payWithPaystack() " >
                    </div>
                </form>
                <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script src="js/payt.js"></script> 
            </div>
        </div>
    </div>
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
            <p>© 2020 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
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