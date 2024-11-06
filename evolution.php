<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="images/x-icon" href="img/logo.png">
    <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-1.css">
    <?php
    $metaTags = array(
        'description' => 'A CONVERSATION WITH NIGERIA’S CHESS QUEEN, WFM PERPETUAL OGBIYOYO',
        'keywords' => 'A CONVERSATION WITH NIGERIA’S CHESS QUEEN, WFM PERPETUAL OGBIYOYO',
        'author' => 'by Ogunsiku Babatunde',
        'image' => 'https://olchessclub.com/lent.jpeg' // URL of the image
    );

    foreach ($metaTags as $name => $content) {
        if ($name === 'image') {
            echo "<meta property=\"og:image\" content=\"$content\">\n";
        } else {
            echo "<meta name=\"$name\" content=\"$content\">\n";
        }
    }
    ?>
    <style>
        .desk-li a {
            font-size: 13px !important
        }

        .reg-cont {
            padding-top: 20px !important
        }

        .reg-cont a {
            color: #fff !important;
            background: #b6393b !important;
            font-size: 13px !important;
            padding: 30px 20px !important
        }

        .reg-cont2 {
            border-left: none !important;
            border-right: none !important;
            margin-left: none !important;
            padding-top: 20px !important
        }

        .reg-cont2 a {
            color: #fff !important;
            background: #000 !important;
            font-size: 13px !important;
            padding: 30px 20px !important
        }

        .desk-nav-cont {
            padding: 0px 50px 0px 50px;
        }

        .desk-menu-cont {
            margin-left: -30px !important
        }

        .logo-cont {
            margin-left: -30px !important
        }

        @media(max-width:1292px) {
            .desk-menu-cont {
                margin-left: -40px !important;
                margin-right: -40px !important
            }

            .logo-cont {
                margin-left: -70px !important
            }
        }

        @media(max-width:1238px) {
            .desk-menu-cont {
                margin-left: -40px !important;
                margin-right: -40px !important
            }

            .logo-cont {
                margin-left: -50px !important
            }

            .reg-cont a {
                padding: 30px 10px !important
            }

            .reg-cont2 a {
                padding: 30px 10px !important;
                font-size: 12px !important
            }
        }

        @media(max-width:1222px) {
            .desk-menu-cont {
                margin-left: -40px !important;
                margin-right: -60px !important
            }

            .desk-li a {
                font-size: 13px !important
            }
        }

        @media(max-width:1160px) {
            .reg-cont a {
                padding: 30px 10px !important
            }

            .reg-cont2 a {
                padding: 30px 10px !important;
                font-size: 12px !important
            }
        }

        @media(max-width:1166px) {
            .desk-menu-cont {
                margin-left: -40px !important;
                margin-right: -60px !important
            }

            .desk-li a {
                font-size: 13px !important
            }
        }

        @media(max-width:1108px) {
            .desk-nav-cont {
                display: none
            }

            #mobile-nav {
                display: block !important
            }
        }

        @media(max-width:400px) {
            .mobile-logo {
                padding-top: 20px !important
            }
        }

        .desk-nav-cont {
            background-color: #fff !important
        }

        .head-body {
            width: 100%;
            height: 70px
        }

        @media(max-width: 1108px) {
            .head-body {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div id="mobile-nav">
        <span class="slide">
            <a href="#" onclick="openSlideMenu()">
                <i class="fas fa-bars"></i>
            </a>
            <div class="mobile-logo">
                <img src="images/Group 183.png" alt="">
            </div>
        </span>
        <div id="menu" class="mob-nav">
            <a href="#" class="close" onclick="closeSlideMenu()">
                x
                <a href="index.php" class="mob-link">HOME</a>
                <li class="nav-item mob-dropdown dropdown">
                    <a class="mob-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ABOUT US
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about-us.php">ABOUT OLCC</a>
                        <a class="dropdown-item" href="team.php">OUR TEAM</a>
                    </div>
                </li>
                <li class="nav-item mob-dropdown dropdown">
                    <a class="mob-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MEDIA
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="gallery.php">GALLERY</a>
                        <a class="dropdown-item" href="videos.php">VIDEOS</a>
                        <a class="dropdown-item" href="news.php">NEWS</a>
                        <a class="dropdown-item" href="article.php">ARTICLES</a>
                    </div>
                </li>
                <a href="membership.php" class="mob-link">MEMBERSHIP</a>
                <li class="nav-item mob-dropdown dropdown">
                    <a class="mob-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EDUCATION
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="school.php">Chess In Schools Program</a>
                        <a class="dropdown-item" href="training.php">Coaching Training Program</a>
                    </div>
                </li>
                <a href="events.php" class="mob-link">EVENTS</a>
                <a href="vacancy.php" class="mob-link">OPENINGS</a>
                <a href="contact-us.php" class="mob-link">CONTACT</a>
                <li class="nav-item mob-dropdown dropdown">
                    <a class="mob-link dropdown-toggle" href="ncc.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        NCC
                    </a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="ncc.php">NCC</a>
                        <a class="dropdown-item" href="NCCMain.php">NCC Main Event</a>
                        <a class="dropdown-item" href="NCCOpen.php">NCC Open Section</a>
                        <a class="dropdown-item" href="liveGames.php">Watch Live Games</a>
                        <a class="dropdown-item" href="archivedGames.php">Archived Games</a>
                        <a class="dropdown-item" href="results.php">Results</a>
                    </div>
                </li>
                <a href="member/login.php" class="mob-link">SIGN IN</a>
                <a href="register.php" class="mob-link">Sign Up for Membership</a>
            </a>
        </div>
    </div>

    <div class="desk-nav-cont fixed-top">
        <div class="Heading">

        </div>
        <div class="logo-cont">
            <img src="images/Group 183.png" alt="">
        </div>
        <div class="desk-menu-cont">
            <ul>
                <li class="desk-li"><a href="index.php">
                        HOME
                    </a></li>
                <li class="desk-li desk-dropdown">
                    <a class="desk-dropbtn" href="#">ABOUT US <i class="fas fa-angle-down"></i></a>
                    <div class="desk-dropdown-content">
                        <a href="about-us.php">ABOUT OLCC</a>
                        <a href="team.php">OUR TEAM</a>
                    </div>
                </li>
                <li class="desk-li desk-dropdown">
                    <a class="desk-dropbtn" href="#">MEDIA <i class="fas fa-angle-down"></i></a>
                    <div class="desk-dropdown-content">
                        <a href="gallery.php">GALLERY</a>
                        <a href="videos.php">VIDEOS</a>
                        <a href="news.php">NEWS</a>
                        <a href="article.php">ARTICLES</a>
                    </div>
                </li>
                <li class="desk-li"><a href="membership.php">
                        MEMBERSHIP
                    </a></li>
                <li class="desk-li"><a href="events.php">
                        EVENTS
                    </a></li>
                <li class="desk-li desk-dropdown">
                    <a class="desk-dropbtn" href="#">EDUCATION <i class="fas fa-angle-down"></i></a>
                    <div class="desk-dropdown-content">
                        <a href="school.php">Chess In Schools Program</a>
                        <a href="training.php">Coaching Training Program</a>
                    </div>
                </li>
                <li class="desk-li desk-dropdown">
                    <a class="desk-dropbtn" href="ncc.php">NCC <i class="fas fa-angle-down"></i></a>
                    <div class="desk-dropdown-content">
                        <!-- <a href="NCCMain.php">NCC Main Event</a>
                            <a href="NCCOpen.php">NCC Open Section</a>
                            <a href="liveGames.php">Watch Live Games</a>
                            <a href="results.php">Results</a>
                            <a href="archivedGames.php">Archived Games</a> -->
                        <a class="dropdown-item" href="NationalChessChampionshipofNigeria2021.php">National Chess Championship 2021</a>
                        <a class="dropdown-item" href="sponsor.php">National Chess Championship 2022</a>
                        <a class="dropdown-item" href="ncc23.php">National Chess Championship 2023</a>
                        <a class="dropdown-item" href="ncc24.php">National Chess Championship 2024</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="reg-cont2">
            <a href="member/login.php">SIGN IN</a>
        </div>
        <div class="reg-cont">
            <a href="register.php">SIGN UP FOR MEMBERSHIP</a>
        </div>
    </div>

    <div class="head-body"></div>
</body>
<title>THE NATIONAL CHESS CHAMPIONSHIP OF NIGERIA: HISTORY IN THE MAKING | olchessclub.com</title>
<style>
    .inner-blog {
        padding-top: 40px;
        padding-bottom: 30px;
    }

    .inner-blog .btn-go-back {
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #b6393b;
        color: #fff
    }

    .inner-blog .btn-go-back i {
        padding-right: 5px
    }

    .inner-blog h3 {
        color: #b6393b
    }

    .inner-blog img {
        border-radius: 10px;
        width: 100%
    }

    .inner-blog p {
        font-size: 15px;
        line-height: 2;
    }
</style>
<script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>


<section class="inner-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-4 text-right py-2">
                <a href="article.php" class="btn-go-back"><i class="fas fa-long-arrow-alt-left"></i> Go back to Article Section</a>
            </div>
            <div class="col-md-12 py-3">
                <h3><b>2024 Nigeria National Chess Championships! A Unique Evolution!</b></h3>
            </div>
            <div class="col-md-8 py-2">
                <p>Four (4) years on, the Orchid-Lekki Chess Club continues to break boundaries to bring to life, this major event that determines the National Open and Women’s Chess Champions for Nigeria.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">
                            <b>
                                Titles in Global Chess:
                            </b>
                        </h5>
                        <p>
                            Grandmaster – GM
                            International Master – IM
                            Fide Master – FM
                            Candidate Master – CM
                            National Master – NM
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="card-title">
                            <b>
                                Women’s Titles:
                            </b>
                        </h5>
                        <p>
                            Woman Grandmaster – WGM
                            Woman International Master – WIM
                            Woman Fide Master – WFM
                            Woman Candidate Master – WCM
                        </p>
                    </div>
                </div>
                <h5>
                    <b>
                        A Quick Trip Down Memory Lane!
                    </b>
                </h5>
                <p>
                    In the year 2021, at the very first of the championships, the duo of IM Balogun Oluwafemi and WFM Ogbiyoyo Perpetual stood atop the standings, as they claimed the Open and Women’s championship crowns brilliantly. Meanwhile, FM Osunfuyi Abimbola and FM Akintoye Abdulrahman Abdulraheem settled for 2nd and 3rd place in the Open section, as Ofowino Toritsemuwa and Enomah Emmanuella Trust, settled for 2nd and 3rd in the Women’s section of the event.
                </p>

            </div>
            <div class="col-md-4 py-2 mb-4">
                <img src="let.jpeg" alt="article img">
            </div>
            <div class="col-md-12">
                <p>
                    2022 saw the first and only back to back champion, as WFM Ogbiyoyo Perpetual secured her second championship title after claiming it via tiebreaks against her teammate, Suleiman Azumi Ayisha, while Enomah Emmanuella Trust finished in 3rd place. Whereas, in the Open section, IM Balogun Oluwafemi had to concede his title to the Beast, FM Adebayo Adegboyega, who showed extreme prowess to pick up the championship with a massive 8/9 points, two (2) points ahead of both IM Balogun Oluwafemi and FM Akintoye Abdulraheem Abdulrahman in 2nd and 3rd place respectively.
                </p>

                <p>
                    Last year, both champions, FM Adegboyega Adebayo and WFM Ogbiyoyo Perpetual were unable to defend their titles due to personal reasons, and the titles for both the Open and Women were up for grabs. Who was going to claim them? Bayelsa State sponsored duo, 11 year old Quickpen Deborah and FM Kigigha Bomo stepped up and showed their readiness and prowess, as they claimed the Women’s and Open championship in the face of overwhelming obstacles. In the Open section of the championship, IM Balogun Oluwafemi and Olisa Tennyson ended in 2nd and 3rd place respectively, while in the Women’s section, Suleiman Azumi Ayisha and Ofowino Toritsemuwa ended in 2nd and 3rd place.
                </p>

                <h5>
                    <b>
                        The 2024 National Chess Championships!
                    </b>
                </h5>
                <p>
                    Here comes the 2024 Nigeria National Chess Championships, December 6th to 13th, which is the 4th edition of the championship. The championship does not only comprise of the main events that determine the champions; it also includes the Masters section, the General Open section, as well as the Junior section. The different sections show the different levels of chess proficiency that players participating, have. The Junior players get to have their championship, as well as the opportunity to play against the giants that did not get into the main event.
                </p>
                <p>
                    This edition of the championships has a special ring to it, as it heralds the birth of The Odega Blitz National Chess Championship, an event named after Engineer Jonathan Odega, who contributed a lot to the development of chess in Nigeria, by supporting various chess projects and activities. The Blitz event will determine the Nigeria National Blitz Chess Champion for 2024, and it will hold every year from this edition, to remember and keep in our hearts, the joy and smiles that the Chairman of Orchid-Lekki Chess Club, the Sponsors Representative of the current Nigeria Chess Federation Board, and a friend to various chess personalities, put on so many faces.
                </p>
                <h5 class="mb-4">
                    <b>
                        Participating in this year’s Nigeria National Chess Championships are:
                    </b>
                </h5>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">
                            <b>
                                The Open Section:
                            </b>
                        </h5>
                        <p>
                            1.FM Kigigha Bomo – Defending National Chess Champion<br>
                            2.IM Aikhoje Odion – Rating <br>
                            3.FM Eyetonghan Callistus – Rating<br>
                            4.FM Abdulraheem Abdulrahman Akintoye – Rating <br>
                            5.IM Balogun Oluwafemi – Rating<br>
                            6.FM Akinseye Abiola – Rating<br>
                            7.Nyuima Ferdinand Tersee – Highest Rated Junior (U20)<br>
                            8.Lapite Oluwadurotimi - Wildcard<br>
                            9.Koko Obubele – Qualifier<br>
                            10.Omorere Benjamin – Qualifier<br>
                            11.Olanrewaju Ajibola – Qualifier<br>
                            12.Okemakinde Toluwanimi – Qualifier
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="card-title">
                            <b>
                                The Women’s Section:
                            </b>
                        </h5>
                        <p>
                            1.WCM Quickpen Deborah – Defending National Chess Champion<br>
                            2.Ofowino Toritsemuwa – Rating<br>
                            3.Suleiman Azumi Ayisha – Rating<br>
                            4.Onoja Iyefu Joy – Rating<br>
                            5.Michael Bridget – Rating<br>
                            6.Samson Peace – Rating<br>
                            7.Nwankwo Michelle Chiamaka – Highest Rated Junior (U20)<br>
                            8.Ajanwachukwu Eunice – Wildcard<br>
                            9.Nzeako Treasure – Qualifier<br>
                            10.Erhabor Joy Felix – Qualifier<br>
                            11.Ishaya Rejoice Kira – Qualifier<br>
                            12.Osundinakin Yemi – Qualifier
                        </p>
                    </div>
                </div>

                <p>
                    Apart from the championships, which are invitational, registration for the various sections will begin by the 1st of November, 2024. This gives everyone ample time to register for the event and plan their participation to the letter.
                </p>

                <p>The Orchid-Lekki Chess Club welcomes everyone to the 4th edition of the Nigeria National Chess Championship. An event that has been hosted on behalf of the Nigeria Chess Federation in the last three (3) years.</p>
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
<style>
    .social-share {
        display: flex;
        flex-direction: column;
    }

    .btn {
        height: 50px;
        width: auto;
        box-shadow: 4px 2px 10px 1px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #999;
        cursor: pointer;
        position: relative;
        background: #fff;
        margin-top: 20px;
        margin-left: -30px;
    }

    .btn .fa-share-alt {
        margin-right: 2px;
    }

    .btn>i:hover {
        color: #405de6;
    }

    .btn:active:not(:focus-within) {
        box-shadow: -2px 2px 8px rgba(0, 0, 0, 0.2) inset;
    }

    .btn:active:not(:focus-within)>i {
        transform: translate(0.8px, 0.8px);
    }

    .social {
        box-shadow: 4px 2px 10px 1px rgba(0, 0, 0, 0.2);
        position: absolute;
        top: -90px;
        display: none;
        justify-content: space-between;
        background-color: white;
        padding: 17px 10px;
        border-radius: 7px;
    }

    .toggle input[type="checkbox"]:checked+.btn .social {
        animation: fadeIn 1s;
        display: flex;
    }

    .toggle input[type="checkbox"]:not(:checked)+.btn .social {
        animation: fadeOut 1s;
    }

    .toggle input[type="checkbox"]:checked+.btn .fa-share-alt {
        display: none;
    }

    .toggle input[type="checkbox"]:not(:checked)+.btn .fa-times {
        display: none;
    }

    .social a {
        margin: 0 15px;
        font-size: 32px;
        color: #999;
    }

    .fa-twitter:hover {
        color: rgb(29, 161, 242);
    }

    .fa-facebook:hover {
        color: #365899;
    }

    .fa-youtube:hover {
        color: red;
    }

    .fa-instagram-square:hover {
        background: -webkit-linear-gradient(#405de6,
                #5851db,
                #833ab4,
                #c13584,
                #e1306c,
                #fd1d1d,
                #f56040,
                #f77737,
                #fcaf45,
                #ffdc80);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .fa-vk:hover {
        color: #4c75a3;
    }

    .fa-behance-square:hover {
        color: black;
    }

    input[type="checkbox"] {
        display: none;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>