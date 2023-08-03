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
                <h3><b>A CONVERSATION WITH NIGERIA’S CHESS QUEEN,
                        WFM PERPETUAL OGBIYOYO</b></h3>
            </div>
            <div class="col-md-7 py-2">
                <p> Perpetual Ogbiyoyo is Nigeria’s National Women Chess Champion. That’s a title she has
                    won back-to-back in the last two years after brilliant performances at the 2021 and 2022
                    National Chess Championships of Nigeria. In this interview with Kunle Kasumu, President of
                    Orchid-Lekki Chess Club (OLCC), the usually private FIDE Master, offers glimpses into her
                    personal life, her love for chess, her journey to becoming Nigeria’s best female player, her
                    thoughts on the development of chess in Nigeria and the impact of the National Chess
                    Championship of Nigeria.
                </p>
                <p>
                    <b>Hello Perpetual. It’s great to have this opportunity to chat with you. </b>
                </p>
                <p>
                    Thank you. The pleasure is mine.
                </p>
                <p>
                    <b>Winning a national championship in any sport is not easy. Winning it back-to-back is
                        a tremendous achievement. What does it feel like to be a two-time National Women's
                        Chess Champion in Nigeria?</b>
                </p>
            </div>
            <div class="col-md-5 py-2 mb-4">
                <img src="lent.jpeg" alt="article img">
            </div>
            <div class="col-md-12">
                <p>
                    I feel proud of myself. It’s a special feeling. Although I can’t claim that being a two-time
                    champion is something I worked a lot towards. I just thought of giving the National Chess
                    Championship a shot again in 2022. I put in some work every day and I was able to win it the
                    second time. I just did my best and hoped to get in the top three. I wasn't expecting to win it
                    the second time but I did and that made me very happy
                </p>

                <p>
                    <b>Were you expecting to win the national title the first time?</b>
                </p>

                <p>I can't say I had high expectations of winning the first time but I was aware of my strong
                    position. A lot of people believed I would win but I was not sure. During the tournament, I lost
                    a crucial game and I thought I had lost the championship but I kept going.
                    I did work hard in terms of preparation. I put in effort. I did my chess trainings but not like I
                    was training to win the title.
                </p>

                <p>
                    <b>Tell us a few things about yourself that most people probably don’t know. </b>
                </p>

                <p>I was born in Maiduguri, Borno State on June 26, 1997. My parents, who are from Ughelli,
                    Delta State, fled Maiduguri in December 2000 due to religion related violence that broke out
                    because of newly introduced Sharia Law. The issue escalated with churches being burnt and
                    Christians becoming targets of extremists. My parents, who were Christians, feared for our
                    lives and so fled to Edo State. That’s how I grew up in Benin until I went to Rivers State for
                    my university education. After graduating, I decided to remain in Port-Harcourt. Maybe that is
                    more because I believe in being my own person and finding my own path. </p>
                <p>
                    People describe me as quiet. I think I am but I can be very talkative when I am with people
                    that I feel comfortable around. I like to be simple and straightforward. I love playing the guitar
                    and I enjoy singing and dancing when no one is watching! When I participated in my first
                    official tournament, I had just lost my dad but I didn’t let that stop me. Fortunately, after the
                    tournament, my ratings came out and I was the top player, it was quite shocking because
                    nobody knew me then.
                </p>
                <p>
                    I have two siblings, a younger sister and an older brother. Our mom, whom I love very much.
                    is still kicking. We lost my dad in 2017. He was sick for a while. At first, we were told he had
                    cerebral malaria, then he began to have some psychological issues. Afterwards, things got
                    out of hand and he was depressed for a long time. We miss him but my mother did a great
                    job filling in. She always taught us that nothing comes easy, that we have to work for what
                    we have. She was a fashion designer and we all worked for her. I had a target to sew a
                    number of clothes for her and got paid for this. I used the money I made to buy a guitar.
                </p>
                <p>
                    My first encounter with chess was when I was nine years old. After we all worked for my
                    mother for some time, she bought us our first computer which at the time was a big deal.
                    That was my first encounter with computer chess. At the time, all I did was play chess on it. I
                    was just having fun and never fully understood the game, especially how the knight moved.
                    But I didn’t continue playing for a while until I got into the university because I didn’t have
                    anyone around me playing chess. Well, the rest, like they say, is history.
                </p>
                <p>
                    I love to see other people win. I love when I am able to help them attain success. I’m
                    currently working on an NGO called Promoting Queens. It’s all about empowering women
                    through chess. As the national women’s chess champion, I want to be able to give back to
                    Nigeria and show people the many opportunities in chess.
                </p>
                <p><b>This is inspiring, well-done! What was schooling like for you?</b></p>
                <div class="row">
                    <div class="col-md-6 py-2">
                        <img src="IMGG.jpg" height="100%" alt="news img">
                    </div>
                    <div class="col-lg-6">
                        <p>I studied biomedical technology at the University of Port-Harcourt from 2013 to 2019. I was
                            meant to finish in 2018 but the World Chess Olympiads happened. Because I was so
                            passionate about chess, I travelled to Batumi, Georgia, to represent Nigeria at the World
                            Chess Olympiad. As a result, I lost some time in school and had to return in 2019 to
                            complete my defense. Chess has been very inspiring for me. It all got serious for me in my
                            third year in school. That was when I started playing chess competitively and it when I
                            represented University of Port Harcourt at NUGA. I went on to also play at the West African
                            University Games in 2018.
                            Combining chess with my academics was challenging and having to fend for myself did not
                            make things easier at all. </p>

                        <p>
                            <b>Tell us a bit about your love for guitar. How good are you?
                            </b>
                        </p>
                        <p>
                            I wouldn’t say I’m good at it. I slowed down on playing the guitar when I began to fall in love
                            with chess. I bought a guitar in 2013, and while I wasn't very good at it, I was curious to
                            learn. In my first year in school, a lady in my compound taught me how to play a few tunes.
                            Unfortunately, I haven’t really taken the time to master the instrument.
                        </p>
                    </div>
                </div>

                <p>
                    <b>Which do you love more, Chess or Guitar?</b>
                </p>
                <p>
                    Oh, definitely chess!
                </p>
                <p>
                    <b>What does chess mean to you? Is it a mere sport or does it mean something deeper?</b>
                </p>
                <p>
                    Chess is not just a sport to me. It is like my escape. Whenever I was going through any
                    tough situation, I could just play chess the whole day and not think about the problems.
                    Also, playing chess has prevented me from making bad choices I might have otherwise
                    made. Chess is my first love. People can break my heart, but even if chess does, I’ll still go
                    back to it.
                </p>
                <p>
                    <b>
                        You have won the last two editions of the National Women Chess Championship.
                        What do you make of the National Chess Championships and its impact on chess in
                        Nigeria?

                    </b>
                </p>
                <p>
                    When the championship first happened in 2021, it was grand and spectacular. It was mind
                    blowing! We hadn’t seen a chess tournament in Nigeria that was so well organized and with
                    attractive prizes. However, for the second edition, I think more could have been done in
                    terms of media coverage because that is what chess needs in Nigeria now.
                    We need people out there to understand that chess can be enjoyable even if they don’t play
                    and we need people to be able to relate to the game and this requires storytelling.
                    But overall, I believe the impact the National Chess Championship being organized by
                    Orchid-Lekki Chess Club (OLCC) on behalf of the Nigeria Chess Federation has been great.
                    It’s a partnership that is really benefitting Nigerian chess. The National Chess Championship
                    has raised the bar of chess organization so high, and it has helped chess players to realize
                    that there is much more to just playing chess. Now, we all look forward to playing the
                    National Chess Championship. This is a very good thing.
                </p>
                <p>
                    I think with the way the National Chess Championship is being organized now, corporate
                    sponsors can be more assured of returns on their sponsorships. There are certainly
                    opportunities for corporate sponsors in Nigerian chess now but we need to tell our story a
                    little differently. We need to get sponsors more interested in chess. If we are able to raise
                    enough awareness about chess and make people see that the sport can be fun, then getting
                    sponsors will be easier.
                    At a personal level, the National Chess Championship has changed my life. It has opened
                    my mind to a lot of possibilities that exist in chess in Nigeria.
                </p>
                <p>
                    <b>
                        Can you share one or two of those with us?
                    </b>
                </p>
                <p>
                    I spoke earlier about the NGO I’m starting. Promoting Queens. I want to see more girls and
                    more women playing chess. If I hadn't competed and won the National Women's Chess
                    Championship, I doubt I would have come up with the idea. My goal for this year is to get us
                    to surpass the number of current female chess players in Nigeria. I also want to help women
                    to integrate lessons from chess into other areas of their lives.
                    I used to struggle a lot in school, especially during exams. It was hard for me to
                    comprehend. I would read a book 10 times before I could understand it. But that changed
                    when I started playing chess. I gradually became better at comprehending things faster.
                    Chess, in my opinion, has a way of developing minds and sharpening skills which is what I
                    want for other women.
                </p>
                <p>
                    <b>
                        How would you describe the quality of female chess players in Nigeria?
                    </b>
                </p>
                <p>
                    We could, in my opinion, do better. Many players in the female category are quite laid back
                    when we need to show off more. If we work harder, we should get the Woman Grandmaster
                    title, which is what I will like to achieve. I want to be the first Woman Grandmaster in Nigeria.
                </p>
                <p>
                    <b>
                        Do you ever get underrated by men who don’t know how good you are in chess?
                    </b>
                </p>
                <p>
                    That happens a lot. There have been many instances where people, especially men,
                    underestimated me just because I am female. I can’t count how many times I have heard a
                    man say, “I can never lose a game to a woman”. In such scenarios, I usually just laugh to
                    myself. When they start playing me and losing, some of them just realise how silly they must
                    have sounded. But some, despite that, never admit losing fairly to a better player just
                    because she is a woman. They go on to make all sorts of excuses like, “I was very tired
                    when we were playing.” “I have had a long day.” Etc.
                </p>
                <p>
                    I remember an experience I had a while back at University of Port Harcourt. These guys
                    came for a tournament and there was a particular fellow who kept boasting about how he
                    was going to beat me convincingly just because I was female. He said it didn’t matter to him
                    that I was female, that when it came to chess, he showed no mercy to women. Well, as we
                    sat to play, I told him that if he was so sure he was going to win, he should put his money
                    where his mouth was. He took up my challenge and we got playing. After losing to me about
                    the 10th time, he quit, found an excuse and quietly exited the place. I could imagine how
                    difficult it must have been for his ego.
                    But being good at chess is not about being male or female. Anyone can develop skills and
                    get good at it. And once you sit to play an opponent, you have to respect him or her not
                    because of their sex but because you know anyone can be capable.
                </p>
                <p>
                    <b>
                        The next National Chess Championship is coming up in October 2023. Are you going
                        to be Nigeria’s first 3-time National Women Chess Champion?
                    </b>
                </p>
                <p>
                    Ha! This is a tricky question. Well, I can’t outrightly say I will win the title again but I will
                    certainly try my best!
                    I’ll just try to put aside my emotions like I always do when playing chess. I won’t try to think
                    about winning too much. At the last championship, there were certain games I should have
                    won but because I was a bit tense, I didn’t win them. But now, I think I will approach the next
                    championship with the ‘It’s just a game’ attitude. This can help me relax more. But of course,
                    performing well comes down to training well, analyzing your games and learning from
                    mistakes. I’ll make an effort not to put myself under pressure.
                </p>
                <p>
                    <b>
                        Who inspires you?
                    </b>
                </p>
                <p>
                    The first person I would always mention is my mum. I’ve always admired her strength and
                    her approach to handling situations.
                </p>
                <p>
                    <b>
                        Who is your favorite chess player of all time?
                    </b>
                </p>
                <p>
                    Mikhail Tal. I admire his aggressive style of playing chess. Tal always went for the kill on the
                    board. That’s how I always want to play chess. It is how I often play chess.
                    In Nigeria, my favorite player is Adebayo Adegboyega, also known as Dabee, the current
                    National Chess Champion of Nigeria. The story of how he took a long break from chess and
                    returned to win the National Chess Championship is inspiring.
                </p>
                <p>
                    <b>Thank you for giving us your time, Perpetual.</b>
                </p>
                <p>
                    It has been a pleasure.
                </p>
            </div>
            <div class="col-md-4 py-2">
                <img src="alllll.jpeg" height="100%" alt="news img">
            </div>
            <div class="col-md-8 py-2">
                <img src="DSC.jpg" height="100%" alt="news img">
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
                                <a title="Follow Us On Facebook" href="https://www.facebook.com/share.php?u=https://www.olchessclub.com/olchessclub/Conversation-with-WFM-Ogbiyoyo.php"><i class="fab fa-facebook"></i></a>
                                <a title="Follow Us On Twitter" href="https://twitter.com/intent/tweet?text=Share+title&url=https://www.olchessclub.com/olchessclub/Conversation-with-WFM-Ogbiyoyo.php"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/share.php?u=https://www.olchessclub.com/olchessclub/Conversation-with-WFM-Ogbiyoyo.php"><i class="fab fa-youtube"></i></a>
                                <a href="whatsapp://send?text=https://www.olchessclub.com/olchessclub/Conversation-with-WFM-Ogbiyoyo.php"><i class="fab fa-whatsapp-square"></i></a>
                                <a href="https://www.instagram.com/=https://www.olchessclub.com/olchessclub/Conversation-with-WFM-Ogbiyoyo.php"><i class="fab fa-instagram-square"></i></i></a>
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
    <!-- <div>
        <a target="_blank" rel="noreferrer" href='https://www.facebook.com/share.php?u=https://www.olchessclub.com/olchessclub/article0003.php' id="" title="Share this robot"><i class="fab fa-facebook"></i></a>
    </div> -->
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