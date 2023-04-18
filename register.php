<?php session_start();?>
<?php include "includes/alerts.php";?>
<?php include "header.php"?>
    <div class="container-fluid reg-body1">
        <div class="container">
            <div class="reg-form-cont">
                <h4>Become an OLCC Member:</h4>
                <form action="process/membersignup.php" method="post">
                <div class="flash"><?php error_alert();success_alert();?></div>
                    <div class="row">
                        <div class="col">
                            <div class="reg-name-cont">
                                <input type="text" name="sname" placeholder="Surname" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="reg-name-cont">
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="reg-name-cont">
                                <input type="text" name="nickname" placeholder="Nickname" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="reg-name-cont">
                                <input type="text" name="phone_number" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="reg-age-cont">
                                <select name="sex" required>
                                    <option>-- Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="reg-age-cont">
                                <select name="title" required>
                                    <option>-- Select Title --</option>
                                    <option value="None">None</option>
                                    <option value="NM">NM</option>
                                    <option value="CM">CM</option>
                                    <option value="FM">FM</option>
                                    <option value="IM">IM</option>
                                    <option value="GM">GM</option>
                                    <option value="WNM">WNM</option>
                                    <option value="WFM">WFM</option>
                                    <option value="WIM">WIM</option>
                                    <option value="WGM">WGM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="reg-email-cont">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="reg-password-cont">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="reg-password-cont">
                        <input type="password" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="reg-name-cont">
                        <input type="date" name="date_of_birth" placeholder="Date of Birth" required>
                    </div>
                    <div class="reg-name-cont">
                        <input type="text" name="fide_id" placeholder="Fide ID">
                    </div>
                    <div class="reg-age-cont">
                        <select name="chess_level" required>
                            <option>-- Select Chess Level --</option>
                            <option value="Novice">Novice</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Master">Master</option>
                            <option value="Expert">Expert</option>
                        </select>
                    </div>
                    <div class="reg-age-cont">
                        <select name="membership_type" required>
                            <option>-- Select Membership Type</option>
                            <option value="Junior">Junior</option>
                            <option value="Senior">Senior</option>
                        </select>
                    </div>
                    <div class="reg-name-cont">
                        <input type="text" name="lichess_id" placeholder="Lichess ID">
                    </div>
                    <div class="reg-age-cont">
                        <select name="security_question" required>
                            <option>-- Select Security Question --</option>
                            <option value="In what city were you born?">In what city were you born?</option>
                            <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option>
                            <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                            <option value="What high school did you attend?">What high school did you attend?</option>
                            <option value="What is the name of your first school?">What is the name of your first school?</option>
                            <option value="What was the make of your first car?">What was the make of your first car?</option>
                            <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                            <option value="Where did you meet your spouse?">Where did you meet your spouse?</option>
                        </select>
                    </div>
                    <div class="reg-name-cont">
                        <input type="text" name="security_answer" placeholder="Security Answer" required>
                    </div>
                    <div class="reg-btn-cont">
                        <input type="submit" value="Register" class="btn btn-danger">
                    </div>
                </form>
                <p>Already have an account? <a href="member/login.php"> Login</a></p>
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