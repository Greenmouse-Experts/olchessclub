<?php session_start();?>
<?php include "includes/alerts.php"?>
<?php include "header.php"?>
<title>Training | Orchid-Lekki Chess Club</title>
    <div class="container-fluid mem-banner">
        <h1>Training</h1>
        <?php success_alert();?>
    </div>
    <div class="container-fluid mem-body1">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="tabs-links nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                        role="tab" aria-controls="nav-home" aria-selected="true">Coaching</a>
                    <a class="tabs-links nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Coaching (Private)</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="toggle-switch">
                        <h1>Coaching Fees for Group Classes</h1>
                    </div>
                    <div class="mem-flex-cont2">
                        <div class="item1">
                            <h4>Quaterly</h4>
                            <ul>
                                <li>GM Coach - for Members - ₦85,000</li>
                                <li>GM Coach - for Non-Members -₦110,000</li>
                                <li>Nigerian Coach (Titled & Experienced) - for Members -₦50,000</li>
                                <li>Nigerian Coach (IM/FM/CM) - for Non-Members - ₦65,000</li>
                            </ul>
                            <div class="plan-btn-cont">
                                <a href="cq.php"><button>Choose Plan</button></a>
                            </div>
                        </div>
                        <div class="item2">
                            <h4>Half-Yearly</h4>
                            <ul>
                                <li>GM Coach - for Members - ₦160,000</li>
                                <li>GM Coach - for Non-Members -₦210,000</li>
                                <li>Nigerian Coach (Titled & Experienced) - for Members -₦90,000</li>
                                <li>Nigerian Coach (IM/FM/CM) - for Non-Members - ₦120,000</li>
                            </ul>
                            <div class="plan-btn-cont">
                                <a href="ch.php"><button>Choose Plan</button></a>
                            </div>
                        </div>
                        <div class="item3">
                            <h4>Yearly</h4>
                            <ul>
                                <li>GM Coach - for Members - ₦300,000</li>
                                <li>GM Coach - for Non-Members - ₦400,000</li>
                                <li>Nigerian Coach (Titled & Experienced) - for Members -₦160,000</li>
                                <li>Nigerian Coach (IM/FM/CM) - for Non-Members - ₦200,000</li>
                            </ul>
                            <div class="plan-btn-cont">
                                <a href="cy.php"><button>Choose Plan</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="toggle-switch">
                        <h1>Coaching Fees for Private Classes</h1>
                    </div>
                    <div class="mem-flex-cont3">
                        <div class="item1">
                            <h4>Quaterly</h4>
                            <ul>
                                <li>GM Coach - for Members - $570</li>
                                <li>GM Coach - for Non-Members -$800</li>
                                <li>Nigerian Coach (Titled & Experienced) - for Members -₦170,000</li>
                                <li>Nigerian Coach (IM/FM/CM) - for Non-Members - ₦200,000</li>
                            </ul>
                            <div class="plan-btn-cont">
                                <a href="cpq.php"><button>Choose Plan</button></a>
                            </div>
                        </div>
                        <div class="item2">
                            <h4>Half-Yearly</h4>
                            <ul>
                                <li>GM Coach - for Members - $1,100</li>
                                <li>GM Coach - for Non-Members - $1,500</li>
                                <li>Nigerian Coach (Titled & Experienced) - for Members -₦320,000</li>
                                <li>Nigerian Coach (IM/FM/CM) - for Non-Members - ₦380,000</li>
                            </ul>
                            <div class="plan-btn-cont">
                                <a href="cph.php"><button>Choose Plan</button></a>
                            </div>
                        </div>
                        <div class="item3">
                            <h4>Yearly</h4>
                            <ul>
                                <li>GM Coach - for Members - $2,000</li>
                                <li>GM Coach - for Non-Members - $2,800</li>
                                <li>Nigerian Coach (Titled & Experienced) - for Members - ₦620,000</li>
                                <li>Nigerian Coach (IM/FM/CM) - for Non-Members - ₦740,000</li>
                            </ul>
                            <div class="plan-btn-cont">
                                <a href="cpy.php"><button>Choose Plan</button></a>
                            </div>
                        </div>
                    </div>
                </div>
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
            <p>© 2022 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
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