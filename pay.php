<?php 
include "includes/dbconnection.php";
?>
<?php include "header.php"?>
<style>
        .container-download{padding-top:70px;padding-left:20px;padding-bottom:70px;background-image:url(download-bg.jpg);background-size:cover;background-position:center center;background-repeat:no-repeat}.container-download h2{color:#f9e9d5;font-weight:700}.btn-download{padding:10px 25px 10px 25px!important;background-color:#fff!important;color:#560e12!important;margin-top:20px!important;border-radius:10px}.btn-download:hover{background-color:#f9e9d5!important;transition:.5s!important;text-decoration:none}.header-players h2{font-weight:700}.header-players h2 span{font-size:20px}.players-box .img-box img{width:170px;padding:2px;border-radius:50%;border:1px solid #681115}.players-box .text-box{margin-top:5px}.players-box .text-box h4{font-size:21px;font-weight:700}.players-box .text-box .btn-profile{background-color:#681115;color:#fff;border:none;padding:8px 25px;border-radius:5px}.players-box .text-box .btn-profile:hover{background-color:#681115cc}.table{width:100%;border-collapse:collapse}.table td,.table th{padding:7px 15px;border:1px solid #ddd;text-align:center;font-size:17px}.table th{background-color:#b6393b;color:#fff}.table tbody tr:nth-child(even){background-color:#ffb7b8}.details-sect p{font-size:17px}.btn-div{margin-top:30px;margin-bottom:30px}.btn-div .btn-register{padding:15px 25px;background-color:#681115;color:#fff;text-decoration:none;border-radius:10px}
    </style>
    <div class="container-fluid mem-banner">
        <h1 style="font-size: 45px;">PAYMENT FOR NCC 2021</h1>
    </div>

    <div class="container py-4">
    <div class="row">
      <div class="col-md-12">
        <p>The following are the fees for the different categories / tournaments of the National Chess Championship (NCC), 2021:</p>
        <div class="col-md-12">
          <h5><b>MASTER CATEGORY</b></h5>
          <p>Registration Fee: <b>₦5,000.00</b> <br>
            Late Registration Fee: <b>₦8,000.00</b>
          </p>
        </div>
        <div class="col-md-12">
          <h5><b>OPEN CATEGORY</b></h5>
          <p>Registration Fee: <b>₦3,000.00</b> <br>
            Late Registration Fee: <b>₦5,000.00</b>
          </p>
        </div>
        <div class="col-md-12">
          <h5><b>JUNIOR TOURNAMENT</b></h5>
          <p>Registration Fee: <b>₦2,000.00</b> <br>
            Late Registration Fee: <b>₦4,000.00</b>
          </p>
        </div>
      </div>
      <div class="col-md-12">
        <h5><b>Important Guidelines</b></h5>
        <ol>
          <li>Please indicate ‘NCC 2021’ in your payment note. </li>
          <li>Please note that registration closes on November 6, 2021</li>
          <li>Please send proof of payment (text or email alert) to any of 08096602599 or 08098780078</li>
        </ol>
        <p>To play in any of the categories, please pay the appropriate amount into the following bank account:</p>
        <p>Name: <b>ORCHID-LEKKI CHESS CLUB LTD - NCC</b> <br>
          Bank: <b>FCMB</b> <br>
          Account No: <b>6930613025</b>
        </p>
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