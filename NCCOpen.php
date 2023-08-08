<?php 
include "includes/dbconnection.php";
?>
<?php include "header.php"?>
<title>National Chess Championship - Open Section | Orchid-Lekki Chess Club</title>
<style>
        .container-download{padding-top:70px;padding-left:20px;padding-bottom:70px;background-image:url(download-bg.jpg);background-size:cover;background-position:center center;background-repeat:no-repeat}.container-download h2{color:#f9e9d5;font-weight:700}.btn-download{padding:10px 25px 10px 25px!important;background-color:#fff!important;color:#560e12!important;margin-top:20px!important;border-radius:10px}.btn-download:hover{background-color:#f9e9d5!important;transition:.5s!important;text-decoration:none}.header-players h2{font-weight:700}.header-players h2 span{font-size:20px}.players-box .img-box img{width:170px;padding:2px;border-radius:50%;border:1px solid #681115}.players-box .text-box{margin-top:5px}.players-box .text-box h4{font-size:21px;font-weight:700}.players-box .text-box .btn-profile{background-color:#681115;color:#fff;border:none;padding:8px 25px;border-radius:5px}.players-box .text-box .btn-profile:hover{background-color:#681115cc}.table{width:100%;border-collapse:collapse}.table td,.table th{padding:7px 15px;border:1px solid #ddd;text-align:center;font-size:17px}.table th{background-color:#b6393b;color:#fff}.table tbody tr:nth-child(even){background-color:#ffb7b8}.details-sect p{font-size:17px}.btn-div{margin-top:30px;margin-bottom:30px}.btn-div .btn-register{padding:15px 25px;background-color:#681115;color:#fff;text-decoration:none;border-radius:10px}.mobile-text{display: none;}@media (max-width: 400px){.desk-text{display: none;}.mobile-text{display: block;}}

    </style>
    <div class="container-fluid mem-banner">
        <h1 style="font-size: 40px;" class="desk-text">National Chess Championship 2021 (Open Section)</h1>
        <h1 style="font-size: 35px;" class="mobile-text">National Chess Championship 2021 (Open Section)</h1>
    </div>

    <div class="container details-sect py-4">
        <div class="row">
            <div class="col-md-12">
                <h3><b>Open Section</b></h3>
                <p>The Open Section of the National Chess Championship of Nigeria, 2021 will include FIDE rated blitz, masters, opens and junior tournaments.</p>
                <p>Below are the details for each tournament.</p>
                <div class="col-md-12">
                    <h5><b>MASTER CATEGORIES</b></h5>
                    <p><b>Date:</b> 11th -14th November 2021 </p>
                    <p><b>Venue:</b> Orchid-Lekki Chess Club, Orchid hotels, Plot 3, Dream Africana Way, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos.</p>
                    <p><b>Eligibility:</b> Players with FIDE ratings and above 2000.</p>
                    <p><b>Format:</b> Swiss System (Dutch); 7 Rounds (Rated).</p>
                    <p><b>Time Control:</b> (G/90 +30): 90 minutes for the game with an addition of 30 seconds (increment) per move starting from move one.</p>
                    <p><b>Registration Window:</b> 15th October, 2021 - 6th November, 2021</p>
                    <p><b>Registration Fee:</b> ₦5,000.00 </p>
                    <p><b>Late Registration Fee:</b> ₦8,000.00</p>
                    <p><b>Exemptions:</b> All IM, WIM, FM, AND WFM titled players are exempted from paying registration fees before registration deadline elapses. All such players will have to pay late registration fees if they register after registration deadline. </p>
                </div>
            </div>
            <div class="col-md-12">
                <h5><b>Playing Schedule</b></h5>
                <table class="table">
                    <thead>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Event</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>11th November</td>
                        <td>10am <br> 3pm</td>
                        <td>Round1 <br> Round2</td>
                      </tr>
                      <tr>
                        <td>12th November</td>
                        <td>10am <br> 3pm</td>
                        <td>Round3 <br> Round4</td>
                      </tr>
                      <tr>
                        <td>13th November</td>
                        <td>10am <br> 3pm</td>
                        <td>Round5 <br> Round6</td>
                      </tr>
                      <tr>
                        <td>14th November</td>
                        <td>11am</td>
                        <td>Round7 <br> Closing ceremony </td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <div class="col-md-12" style="padding-top: 30px;">
                    <h5><b>OPEN CATEGORIES</b></h5>
                    <p><b>Date:</b> 11th -14th November 2021 </p>
                    <p><b>Venue:</b> Orchid-Lekki Chess Club, Orchid hotels, Plot 3, Dream Africana Way, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos.</p>
                    <p><b>Eligibility:</b> This tournament is onlyfor players with ratings below 2000.</p>
                    <p><b>Format:</b> Swiss System (Dutch); 7 Rounds (Rated)</p>
                    <p><b>Time Control:</b> (G/90 +30): 90 minutes for the game with an addition of 30 seconds (increment) per move starting from move one.</p>
                    <p><b>Registration Window:</b> 15th October, 2021 - 6th November, 2021</p>
                    <p><b>Registration Fee:</b> ₦3,000.00 </p>
                    <p><b>Late Registration Fee:</b> ₦5,000.00</p>
                    <p><b>Maximum No. of Participants:</b> 100 players (Number of participants is limited to 100 players due to Covid guidelines).</p>
                    <div class="btn-div">
                        <a href="open-categories.php" class="btn-register">To Register</a>
                        <a href="pay.php" class="btn-register" style="margin-left: 10px">Pay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h5><b>Playing Schedule</b></h5>
                <table class="table">
                    <thead>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Event</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>11th November</td>
                        <td>10am <br> 3pm</td>
                        <td>Round1 <br> Round2</td>
                      </tr>
                      <tr>
                        <td>12th November</td>
                        <td>10am <br> 3pm</td>
                        <td>Round3 <br> Round4</td>
                      </tr>
                      <tr>
                        <td>13th November</td>
                        <td>10am <br> 3pm</td>
                        <td>Round5 <br> Round6</td>
                      </tr>
                      <tr>
                        <td>14th November</td>
                        <td>11am</td>
                        <td>Round7 <br> Closing ceremony </td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <div class="col-md-12" style="padding-top: 30px;">
                    <h5><b>JUNIOR TOURNAMENT</b></h5>
                    <p><b>Date:</b> 9th -10th November, 2021 </p>
                    <p><b>Venue:</b> Orchid-Lekki Chess Club, Orchid hotels, Plot 3, Dream Africana Way, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos.</p>
                    <p><b>Eligibility:</b> Not open to players above 20 years old. <i style="color: red;">Only chess players who shall not have reached the age of 20 before January 1st 2021 are eligible to participate. The categories include Under-20, Under-14 and Under-10.</i></p>
                    <p><b>Format:</b> Swiss System (Dutch); 6 Rounds (Rated)</p>
                    <p><b>Time Control:</b> (G/45 +15): 45 minutes for the game with an addition of 15 seconds (increment) per move starting from move one.</p>
                    <p><b>Registration Window:</b> 15th October, 2021 - 6th November, 2021</p>
                    <p><b>Registration Fee:</b> ₦2,000.00 </p>
                    <p><b>Late Registration Fee:</b> ₦4,000.00</p>
                    <p><b>Maximum No. of Participants:</b> 100 players (Number of participants is limited to 100 players due to Covid guidelines).</p>
                    <p><b>Sections:</b> Under-20 | Under-14 | Under-10</p>
                    <div class="btn-div">
                        <a href="junior-tournament.php" class="btn-register">To Register</a>
                        <a href="pay.php" class="btn-register" style="margin-left: 10px">Pay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h5><b>Playing Schedule</b></h5>
                <table class="table">
                    <thead>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Event</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>9th November</td>
                        <td>10am <br> 12:30pm <br> 3pm</td>
                        <td>Round1 <br> Round2 <br> Round3</td>
                      </tr>
                      <tr>
                        <td>10th November</td>
                        <td>10am <br> 12:30pm <br> 3pm</td>
                        <td>Round4 <br> Round5 <br> Round6</td>
                      </tr>
                      <tr>
                        <td>14th November</td>
                        <td>Awardand Prize Giving Ceremony</td>
                        <td>Awardand Prize Giving Ceremony</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <div class="col-md-12" style="padding-top: 30px;">
                    <h5><b>BLITZ TOURNAMENT</b></h5>
                    <p><b>Date:</b> 8th November, 2021 </p>
                    <p><b>Venue:</b> Orchid-Lekki Chess Club, Orchid hotels, Plot 3, Dream Africana Way, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos. </p>
                    <p><b>Format:</b> Swiss System (Dutch); 11 Rounds (Rated)</p>
                    <p><b>Time Control:</b> (G/5 +2): 5 minutes for the game with an addition of 2 seconds (increment) per move starting from move one.</p>
                    <p><b>Start Time:</b> 11am (Round 1)</p>
                    <p><b>Registration Window:</b> 15th October, 2021 - 6th November, 2021</p>
                    <p><b>Registration Fee:</b> ₦2,000.00 </p>
                    <p><b>Late Registration Fee:</b> ₦3,500.00</p>
                    <p><b>Maximum No. of Participants:</b> 100 players (Number of participants is limited to 100 players due to Covid guidelines). </p>
                    <div class="btn-div">
                        <a href="blitz-reg.php" class="btn-register">To Register</a>
                        <a href="pay.php" class="btn-register" style="margin-left: 10px">Pay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 py-4">
                <h4 class="text-center"><b>Prizes</b></h4>
                <table class="table">
                    <thead>
                      <th>Position</th>
                      <th>PRIZE (&#8358;)</th>
                      <th>CATEGORY</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td style="font-size: 22px; font-weight: bold;">Masters</td>
                            <td></td>
                        </tr>
                      <tr>
                        <td>1st</td>
                        <td>300,000.00</td>
                        <td>MASTERS</td>
                      </tr>
                      <tr>
                        <td>2nd</td>
                        <td>250,000.00</td>
                        <td>MASTERS</td>
                      </tr>
                      <tr>
                        <td>3rd</td>
                        <td>220,000.00</td>
                        <td>MASTERS</td>
                      </tr>
                      <tr>
                        <td>4th</td>
                        <td>200,000.00</td>
                        <td>MASTERS</td>
                      </tr>
                      <tr>
                        <td>5th</td>
                        <td>150,000.00</td>
                        <td>MASTERS</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td style="font-size: 22px; font-weight: bold;">Open</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1st</td>
                        <td>120,000.00</td>
                        <td>U2000</td>
                      </tr>
                      <tr>
                        <td>2nd</td>
                        <td>80,000.00</td>
                        <td>U2000</td>
                      </tr>
                      <tr>
                        <td>3rd</td>
                        <td>50,000.00</td>
                        <td>U2000</td>
                      </tr>
                      <tr>
                        <td>4th</td>
                        <td>40,000.00</td>
                        <td>U2000</td>
                      </tr>
                      <tr>
                        <td>5th</td>
                        <td>30,000.00</td>
                        <td>U2000</td>
                      </tr>
                      <tr>
                        <td>6th</td>
                        <td>20,000.00</td>
                        <td>U2000</td>
                      </tr>
                      <tr style="background-color: #fff;">
                        <td></td>
                        <td style="font-size: 22px; font-weight: bold;">Ladies</td>
                        <td></td>
                    </tr>
                    <tr style="background-color: #ffb7b8;">
                        <td>1st</td>
                        <td>60,000.00</td>
                        <td>BEST FEMALE</td>
                      </tr>
                      <tr style="background-color: #fff;">
                        <td>2nd</td>
                        <td>30,000.00</td>
                        <td>BEST FEMALE</td>
                      </tr>
                      <tr style="background-color: #ffb7b8;">
                        <td>3rd</td>
                        <td>10,000.00</td>
                        <td>BEST FEMALE</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 py-4">
                <h4 class="text-center"><b>NCC Junior Tournament</b></h4>
                <table class="table">
                    <thead>
                      <th>Position</th>
                      <th>PRIZE (&#8358;)</th>
                      <th>CATEGORY</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st</td>
                        <td>100,000.00</td>
                        <td>UNDER20</td>
                      </tr>
                      <tr>
                        <td>2nd</td>
                        <td>70,000.00</td>
                        <td>UNDER20</td>
                      </tr>
                      <tr>
                        <td>3rd</td>
                        <td>50,000.00</td>
                        <td>UNDER20</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td style="font-size: 22px; font-weight: bold;">CATEGORY</td>
                    </tr>
                    <tr>
                        <td>1st</td>
                        <td>40,000.00</td>
                        <td>UNDER14</td>
                      </tr>
                      <tr>
                        <td>2nd</td>
                        <td>30,000.00</td>
                        <td>UNDER14</td>
                      </tr>
                      <tr>
                        <td>3rd</td>
                        <td>20,000.00</td>
                        <td>UNDER14</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td style="font-size: 22px; font-weight: bold;">CATEGORY</td>
                    </tr>
                    <tr>
                        <td>1st</td>
                        <td>Noncash</td>
                        <td>UNDER10</td>
                      </tr>
                      <tr>
                        <td>2nd</td>
                        <td>Noncash</td>
                        <td>UNDER10</td>
                      </tr>
                      <tr>
                        <td>3rd</td>
                        <td>Noncash</td>
                        <td>UNDER10</td>
                      </tr>
                      <tr>
                        <td>4th</td>
                        <td>Noncash</td>
                        <td>UNDER10</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 py-4">
                <h4 class="text-center"><b>Blitz Tournament</b></h4>
                <table class="table">
                    <thead>
                      <th>Position</th>
                      <th>PRIZE (&#8358;)</th>
                      <th>CATEGORY</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st</td>
                        <td>100,000.00</td>
                        <td>BLITZ</td>
                      </tr>
                      <tr>
                        <td>2nd</td>
                        <td>80,000.00</td>
                        <td>BLITZ</td>
                      </tr>
                      <tr>
                        <td>3rd</td>
                        <td>70,000.00</td>
                        <td>BLITZ</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <h4><u>NOTES</u></h4>
                <!--
                <p><b>NCC Selection Criteria:</b> Selection of the top players to be invited will be based on the eligible players FIDE rating as at 1st September 2021. 18 players will be selected by rating while 2 players will be selected as wild cards. Wild cards election is at the discretion of the Nigeria Chess Federation.</p>
                -->
                <p><b>Eligibility for Junior Tournament:</b> Players eligible to be considered as winners in the U20, U14, U10 categories must be below the ages of 20yrs, 14yrs, and 10yrs before the 1st January 2021.</p>
                <p><b>Prize Winners:</b> Any player who is eligible for a prize in more than one category will be given the option to choose his/her preferred prize. Noplayer canwinprizes intwo categories.</p>
                <p><b>Default Time:</b> Default time for the open and junior tournaments will be 30minutes.</p>
                <!--
                <p><b>Accommodation & Feeding:</b> Accommodation & Feeding will be provided only for the 20 players participating in the NCC Invitational Tournament, and the officials (Arbiters, NCF officials & Technical Staff).</p>
                -->
            </div>
            <div class="col-md-12 text-right py-3">
                <a href="NCCMain.php" style="padding:10px 25px; color: #fff; background-color: #B6393B">NCC Main Event</a>
            </div>
        </div>
    </div>


    <div class="container-fluid container-download">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>To Make Payment, Click The Button Below</h2>
                <a href="pay.php" class="btn btn-download">Pay Now</a>
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