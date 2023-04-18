<?php 
include "includes/dbconnection.php";
?>
<?php include "header.php"?>
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
.table-lent {
    width: 100%;
    border-collapse: collapse;
    border-radius: 10px;
}
.table-lent td,
.table-lent th {
    padding:10px 20px 10px 20px;
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
    padding:10px 20px 10px 20px;
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
    .details-sect .kulture h3{
        text-align: center;
        font-size: 25px;
        font-weight: 600;
        padding: 30px 0px 20px 0px;
    }
    .details-sect .the{
        text-align: left;
        font-size: 18px;
        font-weight: 500;
        padding: 10px 0 10px 0px;
    }
    .graph img{
        width: 100%;
        display: block;
        margin: auto;
    }
    /* kulture Ends */
    </style>

    <div class="container-fluid mem-banner">
        <h1 style="font-size: 40px;" class="desk-text">National Chess Championship 2022 Invitational Section</h1>
        <h1 style="font-size: 35px;" class="mobile-text">National Chess Championship 2022 Invitational Section</h1>
    </div>

    <div class="container details-sect py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="kulture">
                    <h3>
                        <b>
                            CHAMPIONSHIP (INVITATIONAL) SECTION OVERVIEW
                        </b>
                    </h3>
                </div>
                <p>
                    The Championship (Invitational) Section of NCC 2022, applies only to players invited to vie for the titles of National Chess Champion and National Women Chess Champion of Nigeria.  They are players with FIDE Ratings that place them among the best 10 players in Nigeria as at September 1, 2022 and players chosen as Wild Cards at the discretion of the Nigeria Chess Federation (NCF).
                </p>
            </div>
            <div class="col-md-12">
                <div class="the">
                    <h4>
                        <b>
                            Regulations for the National Chess Champion Category
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
                                3rd-9th October, 2022 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Venue
                                </b>
                            </td>
                            <td>
                                Orchid-Lekki Chess Club (OLCC)
                                Orchid Hotel, Plot 3, Orchid road, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Format
                                </b>
                            </td>
                            <td>
                                10 Player Round Robin (Invitational)
                                The 2022 Nigeria National Chess Championship is an elite national championship event, featuring the best chess players in Nigeria.
                                *Selection criteria shall be based on players FIDE rating as at 1st September 2022
                                *Wild cards will be invited at the discretion of the Nigeria Chess Federation
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Section
                                </b>
                            </td>
                            <td>
                                Open
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Time Control
                                </b>
                            </td>
                            <td>
                                (G/90 +30): 90 minutes with an addition of 30 seconds (increment) per move starting from move one <br>
                                <b>
                                    <u>Tie-break Criteria</u> <br>
                                </b>
                                The following tie-breaks will be used for the purposes of the cross table and any special prizes or trophies: <br>
                                    1.	Direct Encounter <br>
                                    2.	 Most Blacks <br>
                                    3.	Koya System  <br>
                                    4.	Sonneborn Berger <br>
                                    5.	Won Games 
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
                                Total Prize Fund
                            </b>
                        </td>
                        <td>₦5,850,000.00</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 py-4">
                <div class="the">
                    <h4>
                        <b>
                            Playing Schedule for National Chess Champion Category
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
                        <td style="border-bottom: 1px solid #fff;">3rd October</td>
                        <td>1pm</td>
                        <td>Arrival of Players</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5pm</td>
                        <td>Technical Meeting</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">4th October</td>
                        <td>9am</td>
                        <td>Round 1</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 2</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">5th October</td>
                        <td>9am</td>
                        <td>Round 3</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 4</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">6th October</td>
                        <td>9am</td>
                        <td>Round 5</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 6</td>
                      </tr>
                      <tr>
                        <td>7th October</td>
                        <td style="border-right: 1px solid #fff;"></td>
                        <td>REST DAY</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">8th October</td>
                        <td>9am</td>
                        <td>Round 7</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 8</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">9th October</td>
                        <td>9am</td>
                        <td>Round 9</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td style="border-right: 1px solid #fff;">Closing Ceremony</td>
                        <td>Closing Ceremony</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 py-4">
                <div class="graph">
                    <img src="graph.png" draggable="false">
                </div>
            </div>
            <div class="col-md-12">
                <div class="the py-3">
                    <h4>
                        <b class="">
                            Regulations for the National Women Chess Champion Category
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
                            3rd-9th October, 2022 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Venue
                                </b>
                            </td>
                            <td>
                                Orchid-Lekki Chess Club (OLCC)
                                Orchid Hotel, Plot 3, Orchid road, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Format
                                </b>
                            </td>
                            <td>
                                10-Player Round Robin (Invitational)
                                The 2022 National Women Chess Championship is an elite national championship event, featuring the best female chess players in Nigeria.
                                *Selection criteria shall be based on players’ FIDE ratings as at 1st September, 2022.
                                *Wild cards will be invited at the discretion of the Nigeria Chess Federation.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Section
                                </b>
                            </td>
                            <td>
                                Female 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Time Control
                                </b>
                            </td>
                            <td>
                            (G/90 +30): 90 minutes with an addition of 30 seconds (increment) per move starting from move one<br>
                                <b>
                                    <u>Tie-break Criteria</u> <br>
                                </b>
                                The following tie-breaks will be used for the purposes of the cross table and any special prizes or trophies: <br>
                                    1.	Direct Encounter <br>
                                    2.	 Most Blacks <br>
                                    3.	Koya System  <br>
                                    4.	Sonneborn Berger <br>
                                    5.	Won Games 
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
                            Total Prize Fund
                            </b>
                        </td>
                        <td>₦4,750,000.00</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 py-4">
                <div class="the">
                    <h4>
                        <b>
                        Playing Schedule for National Women Chess Champion Category
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
                        <td style="border-bottom: 1px solid #fff;">3rd October</td>
                        <td>1pm</td>
                        <td>Arrival of Players</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5pm</td>
                        <td>Technical Meeting</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">4th October</td>
                        <td>9am</td>
                        <td>Round 1</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 2</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">5th October</td>
                        <td>9am</td>
                        <td>Round 3</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 4</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">6th October</td>
                        <td>9am</td>
                        <td>Round 5</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 6</td>
                      </tr>
                      <tr>
                        <td>7th October</td>
                        <td style="border-right: 1px solid #fff;"></td>
                        <td>REST DAY</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">8th October</td>
                        <td>9am</td>
                        <td>Round 7</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4pm</td>
                        <td>Round 8</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">9th October</td>
                        <td>9am</td>
                        <td>Round 9</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td style="border-right: 1px solid #fff;">Closing Ceremony</td>
                        <td>Closing Ceremony</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 py-4">
                <div class="the">
                    <h4>
                        <b>
                        Prize for National Women Chess Champion Category
                        </b>
                    </h4>
                </div>
                <div class="graph">
                    <img src="women.png" draggable="false">
                </div>
            </div>
            <div class="col-md-12 text-right py-3">
                <a href="Open-section.php" style="padding:10px 25px; color: #fff; background-color: #B6393B">OPEN SECTION</a>
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
            <p>© 2020 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
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