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