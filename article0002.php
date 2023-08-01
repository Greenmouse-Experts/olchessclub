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
        'description' => 'THE NATIONAL CHESS CHAMPIONSHIP OF NIGERIA: HISTORY IN THE MAKING',
        'keywords' => 'THE NATIONAL CHESS CHAMPIONSHIP OF NIGERIA: HISTORY IN THE MAKING',
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
</body>
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
        font-size: 18px
    }
</style>
<script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>


<section class="inner-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right py-2">
                <a href="article.php" class="btn-go-back"><i class="fas fa-long-arrow-alt-left"></i> Go back to Article Section</a>
            </div>
            <div class="col-md-12 py-3">
                <h3><b>THE NATIONAL CHESS CHAMPIONSHIP OF NIGERIA: HISTORY IN THE MAKING</b></h3>
            </div>
            <div class="col-md-7 py-2">
                <p>According to former world chess champion, Grandmaster Anatoly Karpov, ‘Chess is Everything: art, science and sport’.
                    To understand this statement, is to understand what guides the hosts of the Nigeria National Chess Championships, Orchid-Lekki Chess Club (OLCC).
                    OLCC was founded in 2019, by a team of like-minds seeking to change the landscape of the Nigeria Chess Industry. Chaired by the extremely devout and supportive Engineer Jonathan Odega, the Orchid-Lekki Chess Club made a bid to host the National Chess Championships in the aftermath of COVID-19. 
                    The two-year hosting right bid was successful, and the first edition of the championship was held at Orchid Hotels, Orchid Road, Lekki-Ajah Expressway in October 2021. It was an unforgettable chess festival with about fifteen-million-naira (N15,000,000) in prizes, close to five hundred (500) participants, and over two thousand (2,000+) visitors at the event. 
                    A remarkable and transformative development was the unprecedented media exposure and the involvement of corporate sponsors. Orchid Hotels, Sterling Bank, Kellogg’s, Channels Television, Triumph Power and Gas Systems, Lagos State Advertising Agency (LASAA), were amongst a host of others who keyed into the purpose driven national chess event, as sponsors. This indicated that corporate Nigeria was perhaps beginning to realize and acknowledge the education, social and sporting values of chess as well as the vast potential of the artistic and intellectual sport, in terms of impacting human and societal development. 
                    From the very beginning, OLCC’s vision for the National Chess Championships, was to use it as model for excellent chess organization, a platform for discovering and celebrating Nigerian chess talents, an inspiration for young chess players and a channel for social and education impact initiatives, which chess is globally known to drive. 
                    Big kudos to the Nigeria Chess Federation for observing this, and empowering OLCC to actualize the stated objectives. The Public-Private partnership (PPP) arrangement between the Nigeria Chess Federation and the visionary private chess club, is having momentous impact on the overall development of chess in Nigeria, attracting forward looking sponsors and offering a model for sporting events organization in the country.
                </p>
            </div>
            <div class="col-md-5 py-2">
                <img src="/news/article1inner.jpg" alt="article img">
            </div>
            <div class="col-md-12">
                <p>NCC 2021 was like a chess carnival or festival. Players came from across Nigeria to compete. Over 342 in total. When you factor in visitors and guests, there were close to a thousand participants at the event that spanned an entire week. When the official games were over, players found spaces to relax and play casual games. This went deep into the early mornings. It was not uncommon to find clusters of players playing at Orchid Hotel at 2am in the mornings. They did not just play, they bonded. Contacts were made, friendships were developed and relationships were built. </p>
                <p>Orchid-Lekki Chess Club, working with the NCF, wanted to make a statement with the National Chess Championship and that was exactly what happened. The event was made to be a symbol of what is possible. It indicated how the Nigerian chess community can come together to make chess a successful sport in Nigeria. Egos and personal ambitions were dropped. It was not an OLCC event. It was not an event to raise the profile of any individual or group. It was the chess community’s event and for the good of the sport in Nigeria. This is a major reason why the championship succeeded as it did.</p>
                <p>The structure of the championship is also worth noting. There was the main Invitational Section where 20 elite players (10 males and 10 females) went head to head to determine the National Chess Champion and the National Women Chess Champion of Nigeria. For these players, it was 7 days of intense, gruelling battles on 64 squares. Each game lasted an average of 5 hours and on most days, they had to play two rounds. The side attraction was the Open Section which had various categories: the Masters, Open, and Juniors categories. The Juniors Category was divided into Under-20, Under-14 and Under-10 sub categories. The invitational and open sections were played in two separate halls with the latter in a massive 1,000people capacity space. A championship of this size meant that not less than 10 arbiters were required to officiate. They were led by International Arbiter ObinnaOgbonnaya who served as Chief Arbiter. </p>
                <p>Another notable thing about NCC 2021 is the participation of sponsors. Never has Nigerian chess had so many sponsors and partners involved in an event. Orchid Hotel, Sterling Bank Plc.Kellogg’s, Union Bank Plc., NB Plc., Triumph Oil and Gas, LASAA, Channels TV, BruvChess, LAPO and even individuals all came on board to help make NCC 2021 successful. It was refreshing to see such great organisations back the world’s most intellectual sport. While most offered product rather than monetary sponsorship, their involvements provided an indication of what is possible in financial terms in the future and their ‘In-Kind’ support accumulated to about a hundred million naira. In terms of actual contributions, the main sponsor was Orchid Hotel while the main external sponsor was Sterling Bank Plc which has found chess to possess values consistent with its commendable commitment to education and innovation. Sterling Bank’s high flying Café One project is a testimonial to how chess fits well into its organizational DNA. While Channels Television was an official media partner of the championship, the commitment of other media organisations to reporting chess proved to be tremendously helpful in making the championship a success. From TVC to AIT to Lagos Talks, Classic FM, Metro FM, Radio Nigeria and Eko FM, media organisations put the championship on air like none other. </p>
                <p>A critical success factor for NCC 2021 and the basis for the event in the first place, is the partnership between OLCC and the Nigeria Chess Federation. The ability to synergise well and work together to make the championship what it has become is worth mentioning and celebrating in a country where collaboration needs to be adopted as a national value. The willingness of the current NCF Board led by DIG (Rtd) Sani Mohammed to build on the partnership initiated by the former Board led by Mr. LekanAdeyemi Is highly commendable in an environment where each new leadership stops prior projects and initiate new ones primarily for ego reasons. This dedication to continuity has benefitted Nigerian chess immensely. </p>
                <p>A total of 342 players participated at NCC 2021. At the end, International Master Femi Balogun, a member of Orchid-Lekki Chess Club, emerged as the National Chess Champion of Nigeria after winning the elite invitational section. It was a well-deserved achievement for Balogun who had it rough at the last championship in 2020 and has demonstrated unmatched dedication to self-improvement in his play. Balogun amassed 7 out of 9 points after a round robin tournament against the very best in the country. Remarkably, Balogun did not lose a single game at the championship. He was outstanding. In the female category, it was Perpetual Ogbiyoyo who emerged as the National Women Chess Champion of Nigeria after taking 7 out of 9 points. Playing a mix of positional and tactical style, 24 year old Perpetual Ogbiyoyo lost only a game during the tournament. She drew two and won the rest. </p>
                <p>In the Masters category of the Opens Section which had 50 players, Akinwamide Oluwadamilare came tops with 6 points in a 7 round Swiss tournament. There were a total of 93 participants in the Open category of the Opens Section who played a 7 round Swiss System. This category was won by Asingbi Douyeafter a tie break with a 6/7 performance.</p>
                <p>Peters Oluwafemi Samuel beat 40 other players to win the Under-20 sub-category of the Juniors while NyiumaTersee Ferdinand won the Under-14 event with a 6/7 performance. The Under-10 sub category was exciting and it provided glimpses into the future of Nigerian chess with many children demonstrating amazing talent. Out of the 59 participants in the 6 rounds Swiss System, Nwankwo Victor Chibuikem emerged as the clear winner. This category also had international participants like Indian SamriddhKasera who was one of the stand out Under-10 players. </p>
                <p>NCC 2021 started with an exciting blitz tournament on day one. It was open to all categories of players including the elite ones battling for the National title. The 11 round Swiss tournament was won by International Master OdionAikhoje who had 9.5 out of 11 points. </p>
                <p>Overall, history was made at the 2021 National Chess Championship. New standards have been set and the ceiling raised. This can only augur well for chess organisation in Nigeria. Perhaps, soon enough, Nigeria will be hosting the world in chess. </p>
            </div>
            <div class="col-md-8 py-3">
                <p><b><i>Olakunle Kasumu <br> President, <br> Orchid-Lekki Chess Club (OLCC)</i></b></p>
            </div>
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
                                <a title="Follow Us On Facebook" href="https://www.facebook.com/share.php?u=https://www.olchessclub.com/olchessclub/article0003.php"><i class="fab fa-facebook"></i></a>
                                <a title="Follow Us On Twitter" href="https://twitter.com/intent/tweet?text=Share+title&url=https://www.olchessclub.com/olchessclub/article0003.php"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/share.php?u=https://www.olchessclub.com/olchessclub/article0003.php"><i class="fab fa-youtube"></i></a>
                                <a href="whatsapp://send?text=https://www.olchessclub.com/olchessclub/article0003.php"><i class="fab fa-whatsapp-square"></i></a>
                                <a href="https://www.instagram.com/=https://www.olchessclub.com/olchessclub/article0003.php"><i class="fab fa-instagram-square"></i></i></a>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-md-6 text-right py-4" style="margin-top: 50px;">
                <a href="article.php" class="btn-go-back"><i class="fas fa-long-arrow-alt-left"></i> Go back to Article Section</a>
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