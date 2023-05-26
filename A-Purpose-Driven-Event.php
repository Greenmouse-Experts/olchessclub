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
        'description' => 'THE 2023 NIGERIA NATIONAL CHESS CHAMPIONSHIPS: A PURPOSE DRIVEN EVENT!',
        'keywords' => 'THE 2023 NIGERIA NATIONAL CHESS CHAMPIONSHIPS: A PURPOSE DRIVEN EVENT!',
        'author' => 'by Ogunsiku Babatunde',
        'image' => 'https://olchessclub.com/all.jpeg' // URL of the image
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
                        <a href="NationalChessChampionshipofNigeria2021.php">National Chess Championship 2021</a>
                        <a href="sponsor.php">National Chess Championship 2022</a>
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
                    <h3><b>THE 2023 NIGERIA NATIONAL CHESS CHAMPIONSHIPS: A PURPOSE DRIVEN EVENT!</b></h3>
                </div>
                <div class="col-md-7 py-2">
                    <p>According to former world chess champion, Grandmaster Anatoly Karpov, ‘Chess is Everything: art, science and sport’.
                        To understand this statement, is to understand what guides the hosts of the Nigeria National Chess Championships, Orchid-Lekki Chess Club (OLCC).
                        OLCC was founded in 2019, by a team of like-minds seeking to change the landscape of the Nigeria Chess Industry. Chaired by the extremely devout and supportive Engineer Jonathan Odega, the Orchid-Lekki Chess Club made a bid to host the National Chess Championships in the aftermath of COVID-19.
                        The two-year hosting right bid was successful, and the first edition of the championship was held at Orchid Hotels, Orchid Road, Lekki-Ajah Expressway in October 2021. It was an unforgettable chess festival with about fifteen-million-naira (N15,000,000) in prizes, close to five hundred (500) participants, and over two thousand (2,000+) visitors at the event.
                    </p>
                </div>
                <div class="col-md-5 py-2 mb-4">
                    <img src="all.jpeg" alt="article img">
                </div>
                <div class="col-md-12">
                    <p>A remarkable and transformative development was the unprecedented media exposure and the involvement of corporate sponsors. Orchid Hotels, Sterling Bank, Kellogg’s, Channels Television, Triumph Power and Gas Systems, Lagos State Advertising Agency (LASAA), were amongst a host of others who keyed into the purpose driven national chess event, as sponsors. This indicated that corporate Nigeria was perhaps beginning to realize and acknowledge the education, social and sporting values of chess as well as the vast potential of the artistic and intellectual sport, in terms of impacting human and societal development.</p>

                    <p>From the very beginning, OLCC’s vision for the National Chess Championships, was to use it as model for excellent chess organization, a platform for discovering and celebrating Nigerian chess talents, an inspiration for young chess players and a channel for social and education impact initiatives, which chess is globally known to drive.</p>
                    <p>Big kudos to the Nigeria Chess Federation for observing this, and empowering OLCC to actualize the stated objectives. The Public-Private partnership (PPP) arrangement between the Nigeria Chess Federation and the visionary private chess club, is having momentous impact on the overall development of chess in Nigeria, attracting forward looking sponsors and offering a model for sporting events organization in the country.</p>
                    <p><b>The 2023 National Chess Championships</b></p>
                    <p>Taking lessons from the first two (2) editions, the organizing team has decided to make the 2023 edition of the National Chess Championships one to remember. </p>
                </div>
                <div class="col-md-6 py-2">
                    <img src="what.jpeg" alt="news img">
                    <p>
                        <b><i>L-R: FIDE Vice President, Adeyemi Olalekan; NCF President, DIG (Rtd.) Sani Mohammed mni.; Chairman of OLCC, Engineer Odega Jonathan, and NCF Vice President, Prince Adewole Adeyinka</i></b>
                    </p>
                </div>
                <div class="col-md-6 py-2">
                    <p>New qualification criteria have been proposed and approved (by the Nigeria Chess Federation) to make the championship more competitive and inclusive. Rather than just following the pattern of selecting players based on their rating at a certain time of the year, those who will be invited must now play a minimum required number of FIDE rated games. The purpose is to keep the players fresh and active for the championships. </p>
                    <p>A ‘Qualifying Tournament’ has been introduced, so that furtherance to playing a specified number of rated games, those who are not in the upper echelon (Top 5) of the sport, who otherwise are victorious at zonal championships (among a variety of events and specifications) will participate in the qualifying tournament. Those who qualify from this event will then join the top-rated players to battle for the 2023-2024 crown of the Nigeria National Chess Champion and the Nigeria National Women’s Chess Champion.</p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <p>More than ever, the Orchid-Lekki Chess club is ensuring that the 2023 National Chess Championships will focus on the education and social impact potential of chess. Partnerships are being established with organizations, such as: Chess in Slums Africa, Promoting Queens and Education Ministries, etc, to ensure that Chess in Slums kids, women /girls in less privileged circumstances and public-school students will receive sponsorships to participate at the National Chess Championships in 2023.</p>
                </div>
                <div class="col-md-6">
                    <div class="images">
                        <img src="image.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p>These initiatives are being worked on, to leverage on chess as a social and education impact tool, and consequently, aid national development, as well as citizen re-orientation. </p>
                <p>Considering the fact that the partnership between the Nigeria Chess Federation and Orchid-Lekki Chess Club in organizing the National Chess Championships has been extended till 2025; this signifies an immediate future with bright prospects for chess and its development in the country. This also provides an opportunity for the OLCC to continually improve the quality of organization. This also allows them to explore the many social and developmental benefits of the globally loved sport called Chess. </p>
            </div>
            <div class="col-md-10 py-3">
                <p><b><i>Babatunde Ogunsiku is the leading reporter on African chess news and the CEO of Africa Chess Media.</i></b></p>
                <p>
                    <b> <i> This article was originally published on</i></b> <a href="https://africachessmedia.com/">https://africachessmedia.com/</a>
                </p>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                <div class="social-share" style="margin-top: 50px;">
                    <label class="toggle" for="toggle">
                        <input type="checkbox" id="toggle" />
                        <div class="btn">
                            <div style="float:right">
                                Share
                            </div>
                            <i class="fas fa-share-alt"></i>
                            <i class="fas fa-times"></i>
                            <div class="social">
                                <a title="Follow Us On Facebook" href="https://www.facebook.com/share.php?u=https://www.olchessclub.com/olchessclub/A-Purpose-Driven-Event.php"><i class="fab fa-facebook"></i></a>
                                <a title="Follow Us On Twitter" href="https://twitter.com/intent/tweet?text=Share+title&url=https://www.olchessclub.com/olchessclub/A-Purpose-Driven-Event.php"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/share.php?u=https://www.olchessclub.com/olchessclub/A-Purpose-Driven-Event.php"><i class="fab fa-youtube"></i></a>
                                <a href="whatsapp://send?text=https://www.olchessclub.com/olchessclub/A-Purpose-Driven-Event.php"><i class="fab fa-whatsapp-square"></i></a>
                                <a href="https://www.instagram.com/=https://www.olchessclub.com/olchessclub/A-Purpose-Driven-Event.php"><i class="fab fa-instagram-square"></i></i></a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-md-6 text-right py-4" style="margin-top: 50px;">
                <a href="article.php" class="btn-go-back"><i class="fas fa-long-arrow-alt-left"></i> Go back to Article Section</a>
            </div>
        </div>
    </section>


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
                                <li><a href="https://m.facebook.com/story.php?story_fbid=689848363151739&id=100063797450513&sfnsn=scwspwa&mibextid=6aamW6"><i class="fab fa-facebook"></i> Facebook</a></li>
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
                                <li><a href="contact-us.php">Contact</a></li>
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
            duration: 1500
        });
    </script>
    <script src="js/index.js"></script>
</body>
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
</html>