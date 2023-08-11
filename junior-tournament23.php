<?php
include "includes/dbconnection.php";
?>
<?php include "header.php" ?>
<title>National Chess Championship - Main Event | Orchid-Lekki Chess Club</title>
<style>
    .container-download {
        padding-top: 70px;
        padding-left: 20px;
        padding-bottom: 70px;
        background-image: url(download-bg.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .container-download h2 {
        color: #f9e9d5;
        font-weight: 700;
    }

    .btn-download {
        padding: 10px 25px 10px 25px !important;
        background-color: #fff !important;
        color: #560e12 !important;
        margin-top: 20px !important;
        border-radius: 10px;
    }

    .btn-download:hover {
        background-color: #f9e9d5 !important;
        transition: 0.5s !important;
        text-decoration: none;
    }

    .header-players h2 {
        font-weight: 700;
    }

    .header-players h2 span {
        font-size: 20px;
    }

    .players-box .img-box img {
        width: 170px;
        padding: 2px;
        border-radius: 50%;
        border: 1px solid #681115;
    }

    .players-box .text-box {
        margin-top: 5px;
    }

    .players-box .text-box h4 {
        font-size: 21px;
        font-weight: 700;
    }

    .players-box .text-box .btn-profile {
        background-color: #681115;
        color: #fff;
        border: none;
        padding: 8px 25px;
        border-radius: 5px;
    }

    .players-box .text-box .btn-profile:hover {
        background-color: #681115cc;
    }

    .schedule {
        margin-top: 30px;
        margin-bottom: 20px;
    }

    .table-lent {
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
    }

    .btn-div {
    margin-top: 40px;
    margin-bottom: 30px
  }

  .btn-div .btn-register {
    padding: 10px 30px;
    background-color: #b6393b;
    color: #fff;
    text-decoration: none;
    border-radius: 5px
  }
  .btn-div .btn-register:hover{
    background-color: #000;
  }

    .table-lent td,
    .table-lent th {
        padding: 10px 20px 10px 20px;
        border: 1px solid #ddd;
        text-align: left;
        font-size: 15px;
        border-radius: 10px;
    }

    .table-lent th {
        color: #fff;
    }

    /* .table-lent tbody tr:nth-child(even) {
   
} */
    .details-sect p {
        font-size: 17px;
    }

    .mobile-text {
        display: none;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 10px 20px 10px 20px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 17px;
    }

    .table th {
        background-color: #FFE2E2;
        color: #000;
    }

    /* .table tbody tr:nth-child(even) {
    
} */
    @media (max-width: 400px) {
        .desk-text {
            display: none;
        }

        .mobile-text {
            display: block;
        }
    }

    /* kulture */
    .details-sect .kulture h3 {
        text-align: center;
        font-size: 25px;
        text-transform: capitalize;
        font-weight: 600;
        padding: 30px 0px 20px 0px;
    }

    .details-sect .kulture h3 b {
        text-transform: uppercase;
        font-weight: 900;
        font-size: 35px;
    }

    .details-sect .the {
        text-align: left;
        font-size: 18px;
        font-weight: 500;
        padding: 10px 0 10px 0px;
    }

    .graph img {
        width: 100%;
        display: block;
        margin: auto;
    }

    /* kulture Ends */
</style>

<div class="container-fluid mem-banner">
    <h1 style="font-size: 40px;" class="desk-text">TOURNAMENT REGULATIONS FOR JUNIOR SECTION</h1>
    <h1 style="font-size: 35px;" class="mobile-text">TOURNAMENT REGULATIONS FOR JUNIOR SECTION</h1>
</div>

<div class="container details-sect py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="kulture">
                <h3>
                    <b>
                        TOURNAMENT REGULATIONS FOR ( JUNIOR SECTION )
                    </b>
                </h3>
            </div>
            <p>
                <!-- The Championship (Invitational) Section of NCC 2022, applies only to players invited to vie for the titles of National Chess Champion and National Women Chess Champion of Nigeria.  They are players with FIDE Ratings that place them among the best 10 players in Nigeria as at September 1, 2022 and players chosen as Wild Cards at the discretion of the Nigeria Chess Federation (NCF). -->
            </p>
        </div>
        <div class="col-md-12">
            <div class="the">
                <h4>
                    <b>
                        TOURNAMENT OVERVIEW
                    </b>
                </h4>
            </div>
            <p>
                Apart from the National Chess Championship (NCC) Invitational, NCC 2023 will also have an Open Section which will include: FIDE rated Blitz, Masters, Opens, and Junior categories in order to enable more players participate.
            </p>
            <p>
                While the objective of the NCC is primarily to determine the Nigeria National Chess Champion, and the Nigeria Women Chess Champion, the inclusion of the Open Section (Blitz, Masters, Opens & Juniors) is to expand participation and have a truly special national chess festival.
            </p>
            <p>
                The following are the regulations for the junior tournaments.
            </p>
        </div>
        <div class="col-md-12">
            <div class="the schedule">
                <h4>
                    <b>
                        REGULATIONS (JUNIOR CATEGORY)
                    </b>
                </h4>
            </div>
            <table class="table-lent">
                <!-- <thead>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Event</th>
                    </thead> -->
                <tbody>
                    <tr>
                        <td>
                            <b>
                                Date:
                            </b>
                        </td>
                        <td>
                            3rd – 4th of October, 2023
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                Venue
                            </b>
                        </td>
                        <td>
                            Orchid-Lekki Chess Club Orchid Road, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                Format
                            </b>
                        </td>
                        <td>
                            Swiss System (Dutch); 6 Rounds (Rated)
                        </td>
                    </tr>
                    <!-- <tr>
                            <td>
                                <b>
                                    Section
                                </b>
                            </td>
                            <td>
                                Open
                            </td>
                        </tr> -->
                    <tr>
                        <td>
                            <b>
                                Time Control
                            </b>
                        </td>
                        <td>
                            (G/45 +15): 45 minutes for the game with an addition of 15 seconds
                            (increment) per move starting from move one.
                            <b>
                                <u>Tie-break Criteria</u> <br>
                            </b>

                            1. Direct Encounter <br>
                            2. Greater number of victories <br>
                            3. Buchholz <br>
                            4. Sonneborn Berger <br>
                            <p style="margin-top: 25px; margin-bottom: 0;">
                                <b>
                                    *FIDE Fair Play & Anti-cheating Rules Apply
                                </b>
                            </p>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <b>
                                Registration Fee
                            </b>
                        </td>
                        <td>
                            U20: ₦6,000.00 | U14: ₦6,000.00 | U10: ₦6,000.00
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                Prize Categories
                            </b>
                        </td>
                        <td>
                            U20 1 st – 5 th <br>
                            U14 1 st – 5 th <br>
                            U10 1 st – 5 th
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                Total Prize Fund
                            </b>
                        </td>
                        <td>₦ 549,000.00</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-div">
                <a href="juniorform.php" class="btn-register">To Register</a>
            </div>
        </div>
        <div class="col-md-12 py-4">
            <div class="the schedule">
                <h4>
                    <b>
                        PLAYING SCHEDULE ( JUNIORS )
                    </b>
                </h4>
            </div>
            <table class="table">
                <thead>
                    <th>DATE </th>
                    <th>TIME </th>
                    <th>EVENT </th>
                </thead>
                <tbody>
                    <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>10am</td>
                        <td>Round 1</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #fff; "></td>
                        <td>12:30pm</td>
                        <td>Round 2</td>
                    </tr>
                    <tr>
                        <td>3rd October</td>
                        <td>3pm</td>
                        <td>Round 3</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>10am</td>
                        <td>Round 4</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>12:30pm</td>
                        <td>Round 5</td>
                    </tr>
                    <tr>
                        <td >4th October</td>
                        <td>3pm</td>
                        <td>Round 6</td>
                    </tr>
                    <tr>
                        <td>9th October</td>
                        <td>6pm</td>
                        <td>Closing Ceremony</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-div">
                <a href="juniorform.php" class="btn-register">To Register</a>
            </div>
        </div>

        <div class="col-md-12 py-4">
            <div class="the schedule">
                <h4>
                    <b>
                        PRIZE SCHEDULE (UNDER-20)
                    </b>
                </h4>
            </div>
            <div class="graph">
                <img src="Picture8.png" draggable="false">
            </div>
            <div class="btn-div">
                <a href="juniorform.php" class="btn-register">To Register</a>
            </div>
        </div>

        <div class="col-md-12 py-4">
            <div class="the schedule">
                <h4>
                    <b>
                        PRIZE SCHEDULE (UNDER-14)
                    </b>
                </h4>
            </div>
            <div class="graph">
                <img src="Picture9.png" draggable="false">
            </div>
            <div class="btn-div">
                <a href="juniorform.php" class="btn-register">To Register</a>
            </div>
        </div>

        <div class="col-md-12 py-4">
            <div class="the schedule">
                <h4>
                    <b>
                        PRIZE SCHEDULE (UNDER-10)
                    </b>
                </h4>
            </div>
            <div class="graph">
                <img src="Picture10.png" draggable="false">
            </div>
            <div class="btn-div">
                <a href="juniorform.php" class="btn-register">To Register</a>
            </div>
        </div>
        <!-- <div class="col-md-12">
            <div class="the schedule">
                <h4>
                    <b>
                        PLAYOFF PROCEDURES
                    </b>
                </h4>
            </div>
            <p>
                1. <b>Playoff Procedures:</b> The following tie-breaks will be used for the purposes of the
                crosstable and any special prizes or trophies:
            </p>
            <p>
                I. Direct Encounter <br>
                II. Most Blacks <br>
                III. Koya System <br>
                IV. Sonneborn Berger <br>
                V. Won Games. <br>
            </p>
            <p>
                2. <b> If Two or More Players Are Tied for First,</b> a playoff shall be held to determine
                final standings among all tied players. An Armageddon Game is defined as
                follows: White shall start with 5 minutes and black shall start with 4 minutes.
                Black shall be declared the winner if the game ends in a draw.
            </p>
            <p>
                3. <b>Two Players:</b> The tie will be broken with a two-game rapid match (G/10 +2
                increment). If the contest is still undecided, the match will be decided by an
                Armageddon Game.
            </p>
            4. <b>Three or Four Players:</b> If there are three or four players tied for first, the players
            shall contest a rapid round robin (G/10 +2 increment). If no clear winner is
            produced, the remaining tied players shall contest a blitz (G/3 +2 increment) a)
            round robin (if three or four players remain tied) or b) 2-game match (if two
            players remain tied). If the contest is still undecided, the match will be decided by
            a series of Armageddon Games.
            </p>
            5. <b>More Than Four Players:</b> If more than four players are tied for first place, a
            combination of match tie-breaks and playoffs will be used to determine the
            winner. The format if more than four players are tied for first will be determined
            by the chief arbiter and the tournament organizers.
            </p>
        </div> -->
        <div class="col-md-6 text-left py-4 schedule">
        </div>
        <div class="col-md-6 text-right py-4 schedule">
            <a href="Invitational-Section23.php" style="padding:10px 25px; color: #fff; background-color: #B6393B">VIEW INVITATIONAL SECTION</a>
        </div>
    </div>
</div>

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