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

    .square-holdering {
        align-items: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background-color: #ffffff73;
        box-shadow: 0 0 15px rgba(54, 54, 54, .26);
        border-radius: 10px
    }

    .square-holdering img {
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
        margin: 20px;
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
        font-size: 25px
    }

    .register .btn-div {
        margin-top: 30px
    }

    .register .btn-register {
        background-color: #b6393b;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 10px
    }

    .register .btn-register:hover {
        background-color: #c94a4a
    }

    /* NEWSLETTER */
    .section .text-btn h2 {
        text-align: center;
        font-size: 34px;
        font-weight: 700;
        padding: 0 0 15px 0;
    }

    .section .text-btn p {
        padding: 0px 0 0px 0;
        line-height: 2;
        margin-top: 0;
        margin-bottom: 0;
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

    .Platinum {
        padding: 60px 0px 0px 0px;
    }

    /*  CHANGE OPTION ENDS */
</style>
<div class="container-fluid mem-banner">
    <h1 style="font-size: 45px;">National Chess Championship of Nigeria 2024</h1>

</div>

<section class="section section-default" style="margin-top: 50px;">
    <div class="container">
        <strong>
            <div class="row">
                <div class="text-center col-md-12">
                    <h2 style="padding-bottom: 15px;"><b>Main Sponsors</b></h2>
                </div>
                <div class="col-lg-6">
                    <div class="square-holder">
                        <img alt="logo" src="pt10.png" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="square-holder">
                    <img alt="logo" src="pt4.png" />
                    </div>
                </div>
                <!-- <div class="text-center col-md-12 Platinum">
                    <h2 style="padding-bottom: 15px;"><b>Platinum Sponsor</b></h2>
                </div> -->
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-4">
                    <div class="square-holder">
                    <img alt="logo" src="ind.png" />
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
                <div class="text-center col-md-12 Platinum">
                    <h2 style="padding-bottom: 15px; padding-top: 30px;"><b>Other Sponsors</b></h2>
                </div>
                
                <div class="col-lg-4">
                    <div class="square-holder"  style="padding: 50px 10px 40px 10px;">
                        <img alt="logo" src="la.png" />
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="square-holder" style="padding: 50px 10px 40px 10px;">
                <img alt="logo" src="You.png" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="square-holder" style="padding: 10px 10px 0px 10px;">
                        <img alt="logo" src="ri.png" />
                    </div>
                </div>
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-6">
                    <div class="square-holder">
                    <img alt="logo" src="photo.jpeg" />
                    </div>
                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-2">
                
                </div>
                <!-- <div class="col-lg-12">
                    <div class="square-holdering">
                        <img alt="logo" src="photo.jpeg" />
                    </div>
                </div> -->
                <!-- <div class="text-center col-md-12">
                <h2 style="padding-bottom: 15px; padding-top: 30px;"><b>Supported By</b></h2>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt2.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt3.jpeg" />
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt6new.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt7newss.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt8.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt9.png" />
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt11.png" />
                </div>
            </div> -->
            </div>
        </strong>
    </div>
</section>


<!-- CHANGE OPTION -->
<section class="register" style="margin-top:50px; margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="image-div">
                    <img src="ncc2024.jpg" draggable="false">
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-12 text-center py-4">
                <h2>
                    <b>
                        Know More About The Championship
                    </b>
                </h2>
                <div class="line-hr"></div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="box">
                    <div class="btn-div">
                        <a href="NationalChessChampionshipofNigeria2024.php" class="btn-register">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
<!-- CHANGE OPTION ENDS -->
<section class="section section-default" style="margin-top: 50px;">
    <div class="container">
        <strong>
            <div class="row">

            </div>
            <!-- <div class="text-center col-md-12">
                <h2 style="padding-bottom: 15px; padding-top: 30px;"><b>Supported By</b></h2>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt2.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt3.jpeg" />
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt6new.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt7newss.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt8.png" />
                </div>
            </div>
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt9.png" />
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="square-holder">
                <img alt="logo" src="pt11.png" />
                </div>
            </div> -->
    </div>
    </strong>
    </div>
</section>

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