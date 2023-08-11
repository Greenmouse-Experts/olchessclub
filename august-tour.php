<?php include "header.php" ?>
<title>Articles | Orchid-Lekki Chess Club</title>
<style>
    .article-section {
        padding: 30px 0px;
    }

    .card {
        border: none !important
    }

    .card .card-title {
        color: #b6393b;
        font-weight: 600
    }

    .card .card-text {
        font-size: 17px;
        line-height: 28px
    }

    .card .btn-div {
        margin-top: 20px;
        float: right;
    }

    .card .btn-div a {
        padding: 13px 20px;
        background-color: #b6393b;
        border-radius: 5px;
        font-size: 13px;
        color: #fff;
        transition: .6s
    }

    .card .btn-div a:hover {
        background-color: #611c1d;
        text-decoration: none
    }
    .by{
        font-size: 11px !important;
    }
</style>
<div class="container-fluid cont-banner">
    <h1>Junior Tournament</h1>
</div>
<section class="article-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">OLLC JUNIOR TOURNAMENT ( AUGUST EDITION ) </h5>
                        <img src="augustt.jpeg" class="card-img-top" alt="article img">
                        <div class="btn-div mt-5">
                            <a href="index.php">Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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