<?php
// include "includes/dbconnection.php";
?>
<?php include "header.php" ?>

<style>
    .price-row {
        padding: 50px 30px;
        border-radius: 20px;
        background-image: url(price-bg.png);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat
    }

    .container-download {
        padding-top: 70px;
        padding-left: 20px;
        padding-bottom: 70px;
        background-image: url(download-bg.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat
    }

    .container-download h2 {
        color: #f9e9d5;
        font-weight: 700
    }

    .book {
        margin-top: -120px
    }

    .btn-download {
        padding: 10px 25px 10px 25px !important;
        background-color: #fff !important;
        color: #560e12 !important;
        margin-top: 20px !important;
        border-radius: 10px
    }

    .btn-download:hover {
        background-color: #f9e9d5 !important;
        transition: .5s !important;
        text-decoration: none
    }

    @media (max-width:766px) {
        .book {
            margin-top: 10px !important
        }
    }

    .square-holder {
        padding: 30px;
        align-items: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background-color: #ffffff73;
        min-height: 50px;
        box-shadow: 0 0 15px rgba(54, 54, 54, .26);
        border-radius: 10px
    }

    .square-holder img {
        max-width: 100%;
        transition: all .3s
    }

    .register .line-hr {
        width: 50px;
        height: 2px;
        background-color: #366d2f;
        margin: auto
    }

    .register .box {
        padding: 30px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: 5px;
        background: #fff0f0;
        box-shadow: 0 0 20px 0 rgba(51, 51, 51, .075);
        transition: all .3s ease-in-out;
        text-align: center
    }

    .register .box:hover {
        transform: scale(1.1);
        background-color: #fff
    }

    .register .box h4 {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 15px
    }

    .register .btn-div {
        margin-top: 30px;
    }

    .register .btn-register {
        background-color: #b6393b;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
    }

    .register .btn-register:hover {
        background-color: #000;
    }

    /* NEWSLETTER */
    .section .text-btn h2 {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        padding: 0 0 15px 0;
    }

    .section .text-btn p {
        line-height: 1.8;
    }

    .section .text-btn p b {
        font-weight: 700;
        font-size: 18px;
    }

    /* NEWSLETTER ENDS */

    /*  CHANGE OPTION */
    .register h4 {
        color: #B6393B;
        font-style: italic;
    }

    .image-div img {
        display: block;
        margin: auto;
        width: 100%;
    }

    /*  CHANGE OPTION ENDS */
</style>
<div class="container-fluid mem-banner">
    <h1 style="font-size: 45px;">National Chess Championship of Nigeria 2024</h1>
</div>

<!-- NEWSLETTER -->
<section class="section section-default" style="margin-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-btn">
                    <h2>
                    THE 2024 NIGERIA NATIONAL CHESS CHAMPIONSHIP (NCC)
                    </h2>
                    <p>
                    The 2024 Nigeria National Chess Championship (NCC) is the biggest chess event in Nigeria. This elite national championship is the determinant of the <b>Nigeria Chess Champion and the Nigeria Women's Chess Champion.</b> The Nigeria National Chess Championship is organized by Orchid-Lekki Chess Club (OLCC) on behalf of the Nigeria Chess Federation (NCF) which granted the club hosting rights. The 2024 National Chess Championship will be the 4<sup>th</sup> edition hosted within the partnership between the NCF and OLCC.
                    </p>
                    <p>
                    The main NCC Event is a closed section that will feature some of the top-rated Nigerian chess players who will battle for the coveted national titles. A side event is a national Open Tournament where players of different categories, playing strengths and ages can compete. It includes Masters, Open U-2000 and Junior categories.  The usual blitz event has been replaced this year with a newly inaugurated Jonathan Odega Memorial Chess Tournament. This is a special one-day blitz event that has been set up in memory of late Engr Jonathan Odega who was a great patron and icon of African chess. Odega was the co-founder and chairman of Orchid-Lekki Chess Club (OLCC).
                    </p>
                    <p>
                    While the objective of the NCC is primarily to determine the Nigeria National Chess Champion, and the Nigeria National Women Chess Champion, the Open Tournament is designed to expand participation and have a truly special national chess festival. OLCC intends for the events to help develop and promote chess in Nigeria; provide platforms for the discovery of new talents; attract publicity for the sponsors; and create conditions for participants to have pleasant experiences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- NEWSLETTER Ends -->

<!-- CHANGE OPTION -->
<section class="register" style="margin-top:50px; margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="image-div">
                    <img src="ncc2024.jpg" draggable="false">
                </div>
            </div>
            <div class="col-lg-4"></div> -->
            <div class="col-lg-12 text-center py-4">
                <h2>
                    <b>
                        Know More About The Championship
                    </b>
                </h2>
                <div class="line-hr"></div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <h4>INVITATIONAL SECTION </h4>
                    <div class="btn-div">
                        <a href="Invitational-Section24.php" class="btn-register">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <h4>OPEN SECTION</h4>
                    <div class="btn-div">
                        <a href="Open-section24.php" class="btn-register">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <h4>JUNIOR SECTION</h4>
                    <div class="btn-div">
                        <a href="junior-tournament24.php" class="btn-register">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box">
                    <h4 class="text-uppercase">Jonathan Odega Memorial section</h4>
                    <div class="btn-div">
                        <a href="blitz-section24.php" class="btn-register">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CHANGE OPTION ENDS -->
<!-- <div class="container-fluid container-download">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>To Make Payment, Click The Button Below</h2>
                <a href="pay.php" class="btn btn-download">Pay Now</a>
            </div>
        </div>
    </div> -->
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
        <p>© 2024 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
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