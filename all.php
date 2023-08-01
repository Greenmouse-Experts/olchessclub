<?php include "header.php" ?>
<title>Orchid-Lekki Chess Club</title>
<style>
    .card-image {
        background-image: url(chesss.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .card-image h2,
    .card-image h4,
    .card-image p {
        color: #4d0005 !important;
    }

    .card-image h2 {
        font-weight: bolder !important;
    }

    .note-text-jumb {
        font-size: 18px !important;
    }

    .venue {
        margin-top: -10px !important;
        margin-bottom: 20px !important;
    }

    .btn-download {
        padding: 10px 25px 10px 25px !important;
        background-color: #c9383d !important;
        color: #fff !important;
        margin-top: 20px !important;
        border-radius: 10px;
    }

    .btn-download:hover {
        background-color: #008f4f !important;
        transition: 0.5s !important;
        text-decoration: none;
    }

    @media (max-width: 400px) {
        .card-image {
            margin-top: -50px !important;
        }

        .home-btn {
            margin-top: -20px !important;
        }

        .banner-cont {
            padding-top: 20px !important;
        }
    }

    .banner-caro {
        margin-top: -6px !important;
    }

    marquee {
        background-color: #bc494b !important;
    }

    marquee h5 {
        color: #fff !important;
    }

    .logo-two {
        margin-left: 20px !important;
    }

    .marquee-link {
        color: #000 !important;
    }

    .big-chess {
        margin-top: 20px;
    }


    .video-section .video-div {
        margin: 10px
    }

    .video-section .container-fluid {
        padding: 50px 50px
    }

    .video-section .video-div video {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(0, 0, 0, .246)
    }

    .video-section .video-bg {
        background-color: #b6393b;
        height: 250px;
        margin-top: -180px;
        padding-top: 170px;
        text-align: center
    }

    .video-section .video-bg a {
        background-color: #fff;
        color: #b6393b;
        border-radius: 5px;
        padding: 15px 30px;
        font-size: 16px
    }

    .video-section .video-bg a:hover {
        background-color: #ffdbdc;
    }

    @media (max-width:767px) {
        .video-section .container-fluid {
            padding: 50px 10px
        }
    }

    .container-download {
        padding-top: 90px;
        padding-bottom: 90px;
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

    .home-news {
        margin-top: 30px
    }

    .home-news .card {
        border: none !important
    }

    .home-news .card img {
        border-radius: 10px 0 0 10px;
        width: 100%;
    }

    .home-news .card .card-section {
        background-color: #fee;
        border-radius: 0 10px 10px 0;
    }

    .home-news .card .card-body {
        padding-top: 20px !important;
        padding-bottom: 20px !important
    }

    .home-news .card .card-title {
        color: #b6393b;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 25px;
        line-height: 33px;
    }

    .home-news .card .card-text {
        font-size: 17px;
        line-height: 2;
    }

    @media (max-width:1300px) {
        .home-news .card .card-text {
            font-size: 16px;
            line-height: 1.7;
        }

        .home-news .card .btn-div a {
            padding: 13px 25px !important;
            background-color: #b6393b !important;
            border-radius: 5px;
            font-size: 15px !important;
            color: #fff;
            transition: .6s;
        }
    }

    .home-news .card .btn-div {
        margin-top: 30px
    }

    .home-news .card .btn-div a {
        padding: 13px 35px;
        background-color: #b6393b;
        border-radius: 5px;
        font-size: 15px;
        color: #fff;
        transition: .6s
    }

    .home-news .card .btn-div a:hover {
        background-color: #611c1d;
        text-decoration: none
    }

    .home-news .other-news-below {
        margin-top: 15px;
        margin-bottom: 15px
    }

    .home-news .other-news-below a {
        text-decoration: none
    }

    .home-news .other-news-below img {
        width: 100%;
        margin-bottom: 5px;
        border-radius: 10px;
        border: 1px solid #d6d6d6
    }

    .home-news .other-news-below p {
        font-size: 15px;
        color: #000;
        font-weight: 600
    }


    @media(max-width:1182px) {
        .home-news .card img {
            width: 670px
        }
    }

    @media(max-width:991px) {
        .home-news .card img {
            width: 100%;
            border-radius: 10px 10px 0 0
        }

        .home-news .card .card-section {
            border-radius: 0 0 10px 10px
        }
    }

    @media(max-width:991px) {
        .home-news {
            margin-top: 60px
        }
    }

    /* CLICK */
    body {
        overflow-x: hidden !important;
    }

    .Click {
        background-color: #BC494B;
    }

    .Click marquee h2 {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 20px;
        font-weight: 600;
        color: #fff;
        padding: 10px 0px 0px 0px;
    }

    .main {
        width: 100% !important;
        display: block;
        margin: auto;
        border-radius: 10px !important;
    }

    .Click marquee a {
        text-decoration: underline;
        color: #fff;
    }

    .Click marquee a:hover {
        text-decoration: underline;
        color: #fff;
    }

    .Click .btn-cure {
        color: #fff;
        text-align: center;
    }

    .Click .btn-cure a {
        text-decoration: none;
        color: #fff;
    }

    .Click .btn-cure a:hover {
        text-decoration: underline;
        color: #fff;
    }

    .Click .btn-curee {
        color: #fff;
        text-align: center;
        padding: 10px 0px 0px 0px;
    }

    .Click .btn-curee a {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 0;
        font-size: 17px;
    }

    .home-btn {
        margin-top: -20px !important;
    }

    @media (max-width:1000px) {
        .home-btn {
            margin-top: -20px !important;
        }
    }

    .amin {
        width: 750px !important;
    }

    .desk-menu-cont ul {
        padding-left: 100px !important;
    }

    .moving {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .size {
        width: 300px !important;
        display: block;
        margin: auto;
    }

    /* .calling{
        background-image: url(./KK.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 500px 0px;
        width: 100%;
        object-fit: cover;
    } */
    /* .calling{
        height: 350px;
        width: 100%;
    } */
    .calling img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* CLICK ENDS */
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<!-- Section -->
<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card-section card-body  card mt-5">
                <h5 class="card-title text-center" style="color:#c9383d;">OLCC JUNIOR TOURNAMENT  (June Edition)</h5>
                </div>                               
                <div class="calling">
                    <img src="KK.jpeg" alt="img">
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<!-- Section -->


<!-- News Section -->
<div class="container-fluid container-download">
    <div class="row">
        <div class="col-md-6 text-center">
            <h2>Read Our Latest News</h2>
            <a href="news.php" class="btn btn-download">Click To Read</a>
        </div>
        <div class="col-md-6 text-center">
            <h2>Read Our Articles</h2>
            <a href="article.php" class="btn btn-download">Click To Read</a>
        </div>
    </div>
</div>
<!-- News Section Ends -->

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
        duration: 1500,
        once: true
    });
</script>
<script src="js/index.js"></script>
</body>

</html>1