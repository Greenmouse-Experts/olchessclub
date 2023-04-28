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
        margin-top: 25px
    }

    .home-news .card {
        border: none !important
    }

    .home-news .card img {
        border-radius: 10px 0 0 10px;
        width: 710px
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
        font-size: 20px;
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

    @media(max-width:1495px) {
        .home-news .card img {
            width: 600px
        }
    }

    @media(max-width:1338px) {
        .home-news .card img {
            width: 650px
        }
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

    .desk-menu-cont ul {
        padding-left: 100px !important;
    }

    /* CLICK ENDS */
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<!-- CLICK -->
<!-- <section class="Click">
            <div class="container-fuild g-0">
                <div class="row">
                    <div class="col-lg-2">
                    <div class="btn-curee">
                            <a href="">
                                TOP NEWS
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <marquee>
                                <h2>
                                   REGISTER FOR NATIONAL CHESS CHAMPIONSHIP (NCC) 2022. <a href="sponsor.php">
                                   CLICK HERE TO REGISTER 
                                   </a>
                                </h2>
                            </marquee>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="btn-cure">
                            <a href="NationalChessChampionshipofNigeria2022.php">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!-- CLICK ENDS -->
<!--
    <div id="carouselExampleFade" class="carousel slide carousel-fade banner-caro" data-ride="carousel" data-interval="2900" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active caro1">
            </div>
            <div class="carousel-item caro2">
            </div>
            <div class="carousel-item caro3">
            </div>
        </div>
    </div>
    <div class="container-fluid banner-cont">
        <h1>Orchid-Lekki Chess Club (OLCC)</h1>
        <p>Nigeria's leading Chess club</p>
        <div class="ban-bec-btn">
            <a href="register.php"><button>BECOME A MEMBER</button></a>
        </div>
    </div>
    -->
<section class="home-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <img src="left.jpeg" alt="img">
                        </div>
                        <div class="col-lg-7 card-section">
                            <div class="card-body">
                                <h5 class="card-title">Adegboyega & Ogbiyoyo Win the 2022 Nigeria National Chess Championships</h5>
                                <p class="card-text">A brilliant show of chess organisation, awe-inspiring performances, and an exclusive finale, separated the 2022 Nigeria National Chess Championships from every other tournament in the country.
                                    It was a grueling 9-round battle in the Open (Invitational) section of the Championship, and Fide Master Adebayo Adegboyega stood tall above all the other invited players by scoring 8 out of 9 points to become the new National Chess Champion of Nigeria thereby dethroning International Master Femi Balogun who put up a good fight and ended up in the second position.
                                </p>

                                <div class="btn-div">
                                    <a href="blog0001.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <!-- <div class="card">
                        <div class="row no-gutters">
                          <div class="col-lg-12">
                            <div class="home-btn">
                                <a href="sponsor.php">
                                    <img src="rice.jpg" class="main" alt="img">
                                </a>
                            </div>
                          </div>
                        </div>
                    </div> -->
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="row other-news-below">
            <div class="col-md-1"></div>
            <div class="col-md-2 py-2">
                <a href="blog0002.php">
                    <img src="news-thumbnails1.jpg" alt="image">
                    <p>Balogun and Ogbiyoyo are National Chess Champions of Nigeria</p>
                </a>
            </div>
            <div class="col-md-2 py-2">
                <a href="article.php">
                    <img src="news-thumbnails2.jpg" alt="image">
                    <p>The National Chess Championship of Nigeria: History In The Making</p>
                </a>
            </div>
            <div class="col-md-2 py-2">
                <a href="about-us.php">
                    <img src="news-thumbnails3.jpg" alt="image">
                    <p>About Orchid-Lekki Chess Club (OLCC)</p>
                </a>
            </div>
            <div class="col-md-2 py-2">
                <a href="membership.php">
                    <img src="news-thumbnails4.jpg" alt="image">
                    <p>Become A Member of Orchid-Lekki Chess Club (OLCC)</p>
                </a>
            </div>
            <div class="col-md-2 py-2">
                <a href="gallery.php">
                    <img src="news-thumbnails5.jpg" alt="image">
                    <p>National Chess Champion 2021 - Explore Pictures</p>
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

<!--
    <div class="card card-image">
      <div class="text-white py-5 px-4" >
        <div class="py-5">
          <h5 class="h5 text-center">
              <img src="img/logo.png" width="100px" alt="logo">
              <img src="logo4.png" class="logo-two" width="100px" alt="logo">
          </h5>
          <h2 class="card-title h2 my-4 py-2 text-center">
            <a href="NationalChessChampionshipofNigeria2021.php" style="text-decoration: none; color:#4D0005">National Chess Championship Lagos 2021</a>
          </h2>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-5" style="padding-top: 50px">
                  <p class="mb-4 note-text-jumb text-left">The 2021 edition of the competition is scheduled for November 8 to November 14, 2021 and it is set to be a celebration of the best of Nigeria with world class organisation delivered using all of today's social media channels.</p>
                    <p class="text-left"><strong>Event Dates:</strong> 8th - 14th November, 2021.</p>
                    <p class="venue text-left"><strong>Venue:</strong> Orchid Hotel, Lekki, Lagos.</p>
                    <a class="btn-download text-left" href="NationalChessChampionshipofNigeria2021.php">Read More <i class="fa fa-chevron-right" style="padding-left: 5px;"></i></a>
                  </div>
                  <div class="col-lg-5">
                    <a href="NationalChessChampionshipofNigeria2021.php">
                      <img src="bg-ches.png" class="big-chess" width="100%" alt="">
                    </a>
                  </div>
                  <div class="col-lg-1"></div>
              </div>
          </div>
        </div>
      </div>
    </div>
    -->

<!--
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center item1">
                <h3 style="text-transform: uppercase; font-weight: bolder !important; color: #000;">OLCC/CAFE ONE children's chess Tournament.</h3>
                <div style="margin: auto; background-color: #B6393B; height: 2px; width:70px; margin-bottom: 30px"></div>
            </div>
            <div class="col-lg-8 text-center">
                <img src="flyer1.jpg" width="100%" style="filter: drop-shadow(0px 0px 10px #00000024);border-radius: 10px;pointer-events: none;">
            </div>
        </div>
    </div>
    -->


<div class="container-fluid body1">
    <div class="container">
        <div class="body1-flex-cont">
            <div data-aos="fade-right" class="item1">
                <h3>The <span class="body1-color">Orchid-Lekki Chess Club (OLCC),</span><br> Nigeria's
                    Leading Chess Club.</h3>
                <p>
                    The club started formally in
                    December 2019 following a merger between Lekki
                    Chess Club and Orchid Chess Club in what has
                    been described as the biggest collaboration in
                    Nigeria’s chess history. <br><br>
                    Lekki Chess Club started in 2013 as a gathering of
                    friends to play chess and quickly grew into a top
                    chess spot in Lagos. The club organized and
                    participated in many chess events and also hosted
                    local and international chess stars including the
                    legendary English Grandmaster, Nigel Short (now
                    FIDE Vice President) in June 2018. <br>
                </p>
                <a href="about-us.php">Read more</a>
            </div>
            <div data-aos="fade-left" class="item2">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                            <img src="images/Femi vs Carlsen.jpg">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="images/Danny.png">
                        </div>
                        <div class="carousel-item">
                            <img src="images/tourney.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid body1-mobile">
    <div class="container">
        <h3>The <span class="body1-color">Orchid-Lekki Chess Club (OLCC),</span> Nigeria's
            Leading Chess Club.</h3>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Femi vs Carlsen.jpg">
                </div>
                <div class="carousel-item">
                    <img src="images/Danny.png">
                </div>
                <div class="carousel-item">
                    <img src="images/tourney.jpg">
                </div>
            </div>
        </div>
        <p>
            The club started formally in
            December 2019 following a merger between Lekki
            Chess Club and Orchid Chess Club in what has
            been described as the biggest collaboration in
            Nigeria’s chess history. <br><br>
            Lekki Chess Club started in 2013 as a gathering of
            friends to play chess and quickly grew into a top
            chess spot in Lagos. The club organized and
            participated in many chess events and also hosted
            local and international chess stars including the
            legendary English Grandmaster, Nigel Short (now
            FIDE Vice President) in June 2018. <br>
        </p>
        <a href="about-us.html">Continue Reading</a>
    </div>
</div>
<div class="container-fluid body2">
    <div class="container">
        <div class="body2-flex-cont">
            <div class="item1">
                <h3>What We Offer</h3>
                <div class="circle">
                    <div data-aos="fade-down" class="circle-cont1">
                        <h5>Chess in Schools Program</h5>
                        <p style="font-size:11px;">
                            OLCC provides instructors for schools to teach
                            fundamental chess principles and educational values
                            learned through chess. Classes focus on chess
                            fundamentals while incorporating lessons on critical
                            thinking, planning, and logic. The students are also
                            encouraged to demonstrate good sportsmanship and
                            to strive for success in the classroom as well as over
                            the chessboard.
                        </p>
                    </div>
                    <div data-aos="fade-up" class="circle-cont2">
                        <h5>Coach Training Program</h5>
                        <p style="font-size:11px;">
                            OLCC provides coaching and instructional resources
                            on either an individual or small group basis. Classes
                            occur on a weekly schedule and the training is
                            individualized based on prior chess knowledge and
                            ability, the instruction time ranges depending on the
                            needs of the individual or group.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item2">
                <h3>Tournament Support</h3>
                <p style="font-size:15px;">
                    OLCC is a resource for all of your tournament needs.
                    We offer rentable venues for chess tournaments,
                    experienced arbiters and tournament directors who
                    can organize, manage, and direct tournaments on site.
                </p>
            </div>
        </div>
    </div>
</div>

<!--Video Section-->
<section class="video-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center py-5">
                <h2><b>Videos From The National Chess Championship 2021</b></h2>
                <div style="margin: auto; background-color: #B6393B; height: 2px; width:70px"></div>
            </div>
            <div class="col-md-6">
                <div class="video-div">
                    <video src="gallery-pics/videos/video (5).mp4" controlsList="nodownload" controls></video>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-div">
                    <video src="gallery-pics/videos/video (6).mp4" controlsList="nodownload" controls></video>
                </div>
            </div>
        </div>
    </div>
    <section class="video-bg">
        <a href="videos.php">Watch More Videos</a>
    </section>
</section>
<!--Video Section Ends-->

<div class="container-fluid body3">
    <div class="container">
        <div data-aos="fade-up-right" class="body3-aos">
            <h2>OLCC MEMBERSHIP</h2>
            <p>
                Orchid-Lekki Chess Club (OLCC) is open to all
                members of the public who are interested in
                chess and are happy to align with the values that
                guide the club. Membership is open to both
                adults and children. Children members of the
                club belong to the thriving OLCC Junior Club, an
                arm of OLCC. Our members range from those
                who are just learning to play to more experienced
                players who have been honing their skills for
                many decades.
            </p>
        </div>
        <div class="mem-btn">
            <a href="membership.php"><button data-aos-delay="400" data-aos="zoom-in">Find Out More</button></a>
        </div>
    </div>
</div>

<div class="container-fluid body4">
    <div class="container">
        <h4>TESTIMONIALS</h4>
        <h3>What People Say About Us</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont1">
                                <p>
                                    OLCC is simply the personification of service and
                                    dedication to a cause. The executives and their
                                    members are committed to the idea of grooming
                                    chess grandmasters from our children. Their
                                    commitment and dedication to that task speaks
                                    of traits chess play
                                </p>
                                <h4>Humphrey Nwafor</h4>
                                <h6>Mechanical Engineer/Project Manager & Parent of four children in OLCC</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-cont2">
                                <p>
                                    OLCC provides a wonderful environment for kids
                                    to learn how to play chess the right way. My son
                                    looks forward to the training sessions & is always
                                    eager to play in tournaments with other kids. The
                                    club's impact on the wider Nigerian Chess
                                    community is very commendable, and we are
                                    honored to be members of the esteemed club.
                                </p>
                                <h4>Adebola Adenusi</h4>
                                <h6>IT Consultant / Parent</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont3">
                                <p>
                                    OLCC has really made an impact on my life. The
                                    club has been the best thing that has happened
                                    to me. I am very happy to be a member and I
                                    have benefited a lot from the club in terms of
                                    improvement in my style of playing, boldness and
                                    ability to focus on whatever am engaged in
                                    whether related to chess or not.
                                    OLCC is the best and it has been a privilege to
                                    be a part of it.
                                </p>
                                <h4>Akinbodewa Adebayo</h4>
                                <h6>Student/Member</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-cont4">
                                <p>
                                    OLCC is a very relaxed place to meet others
                                    interested in playing chess. A wide range of
                                    chess-playing expertise is available at the club
                                    and the members are genuinely friendly and
                                    welcoming to all new arrivals. The club house at
                                    Orchid Hotel allows for delicious meals and
                                    refreshments without having to leave the venue
                                    so you can play good chess and have a blast!

                                </p>
                                <h4>Magnus Ekpiken</h4>
                                <h6>Accountant/Member</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont3">
                                <p>
                                    I was really searching for a chess club so I
                                    checked online and found the club. It has been a
                                    great experience since I became a member.
                                    To reunite with such an old hobby after many
                                    years felt so good. Sometimes you just want to
                                    watch and learn from better players. OLCC has
                                    made this possible.
                                    This is the type of club we need for Nigeria to
                                    produce a grandmaster of her own. My kids are
                                    definitely going to sign up too!
                                </p>
                                <h4>Taiwo Abiri</h4>
                                <h6>Auto Mechanic/Member</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-cont4">
                                <p>
                                    OLCC! If I had wings, I would have flown around
                                    the world & told everyone about how marvellous
                                    a team you guys make with my children. The
                                    bravery, integrity and positive energy you bring
                                    out of my children is second to none. In this
                                    period of uncertainty, OLCC has made certain
                                    my children stayed the right course. The words
                                    “thank you” isn’t enough to tell how much I
                                    appreciate the efforts you put in everyday in
                                    making sure that while my kids are strategizing in
                                    chess, they are also having so much fun. Indeed,
                                    you guys are partners with me in parenting my
                                    children. I have missed nothing because you
                                    have been there in every facet of our lives.

                                </p>
                                <h4>Mercy Salem-Ahenjir</h4>
                                <h6>HRM Professional/Parent with 4 children in OLCC</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid body4-mobile">
    <div class="container">
        <h4>TESTIMONIALS</h4>
        <h3>What People Say About Us</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="8000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont1">
                                <p>
                                    OLCC is simply the personification of service and
                                    dedication to a cause. The executives and their
                                    members are committed to the idea of grooming
                                    chess grandmasters from our children. Their
                                    commitment and dedication to that task speaks
                                    of traits chess play
                                </p>
                                <h4>Humphrey Nwafor</h4>
                                <h6>Mechanical Engineer/Project Manager & Parent of four children in OLCC</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont2">
                                <p>
                                    OLCC provides a wonderful environment for kids
                                    to learn how to play chess the right way. My son
                                    looks forward to the training sessions & is always
                                    eager to play in tournaments with other kids. The
                                    club's impact on the wider Nigerian Chess
                                    community is very commendable, and we are
                                    honored to be members of the esteemed club.
                                </p>
                                <h4>Adebola Adenusi</h4>
                                <h6>IT Consultant / Parent</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont3">
                                <p>
                                    OLCC has really made an impact on my life. The
                                    club has been the best thing that has happened
                                    to me. I am very happy to be a member and I
                                    have benefited a lot from the club in terms of
                                    improvement in my style of playing, boldness and
                                    ability to focus on whatever am engaged in
                                    whether related to chess or not.
                                    OLCC is the best and it has been a privilege to
                                    be a part of it.
                                </p>
                                <h4>Akinbodewa Adebayo</h4>
                                <h6>Student/Member</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-cont4">
                                <p>
                                    OLCC is a very relaxed place to meet others
                                    interested in playing chess. A wide range of
                                    chess-playing expertise is available at the club
                                    and the members are genuinely friendly and
                                    welcoming to all new arrivals. The club house at
                                    Orchid Hotel allows for delicious meals and
                                    refreshments without having to leave the venue
                                    so you can play good chess and have a blast!

                                </p>
                                <h4>Magnus Ekpiken</h4>
                                <h6>Accountant/Member</h6>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

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

<div class="foot-banner" style="height: 412px !important;">
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
                            <li><a href="https://twitter.com/orchidchessclub?t=eAihKuFSH8q5rdKoGy3lwQ&s=08"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="https://www.instagram.com/invites/contact/?i=fz6kyiomfsk0&utm_content=msr3cra"><i class="fab fa-instagram"></i> Instagram</a></li>
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
                            <li><a href="vacancy.php">Openings</a></li>
                            <li><a href="contact-us.php"">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-lg-3">
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
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p>© 2023 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
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

    </html>