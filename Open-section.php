<?php 
include "includes/dbconnection.php";
?>
<?php include "header.php"?>
<title>National Chess Championship - Open Section | Orchid-Lekki Chess Club</title>
<style>
        .container-download{padding-top:70px;padding-left:20px;padding-bottom:70px;background-image:url(download-bg.jpg);background-size:cover;background-position:center center;background-repeat:no-repeat}.container-download h2{color:#f9e9d5;font-weight:700}.btn-download{padding:10px 25px 10px 25px!important;background-color:#fff!important;color:#560e12!important;margin-top:20px!important;border-radius:10px}.btn-download:hover{background-color:#f9e9d5!important;transition:.5s!important;text-decoration:none}.header-players h2{font-weight:700}.header-players h2 span{font-size:20px}.players-box .img-box img{width:170px;padding:2px;border-radius:50%;border:1px solid #681115}.players-box .text-box{margin-top:5px}.players-box .text-box h4{font-size:21px;font-weight:700}.players-box .text-box .btn-profile{background-color:#681115;color:#fff;border:none;padding:8px 25px;border-radius:5px}.players-box .text-box .btn-profile:hover{background-color:#681115cc}.table{width:100%;border-collapse:collapse}.table td,.table th{padding:7px 15px;border:1px solid #ddd;text-align:center;font-size:17px}.table th{background-color:#b6393b;color:#fff}.table tbody tr:nth-child(even).details-sect p{font-size:17px}.btn-div{margin-top:30px;margin-bottom:30px}.btn-div .btn-register{padding:15px 25px;background-color:#681115;color:#fff;text-decoration:none;border-radius:10px}.mobile-text{display: none;}@media (max-width: 400px){.desk-text{display: none;}.mobile-text{display: block;}}
    /* Open */
    .Open h3{
        font-size:30px;
        padding: 10px 0px 20px 0px;
        text-align: center;
    }
    .Open p{
        line-height: 2;
    }
    .master{
        padding: 0px 0 20px 0 ;
    }
    .master p{
        margin-top: 0;
        margin-bottom: 0;
        line-height: 2;
    }
    .diffent{
        color: red;
    }
    /* Open Ends */
    </style>
    <div class="container-fluid mem-banner">
        <h1 style="font-size: 40px;" class="desk-text">National Chess Championship 2022 (Open Section)</h1>
        <h1 style="font-size: 35px;" class="mobile-text">National Chess Championship 2022 (Open Section)</h1>
    </div>

    <div class="container details-sect py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="Open">
                    <h3>
                        <b>
                            Open Section
                        </b>
                    </h3>
                    <p>
                        The Open Section of NCC 2022 is open to players outside of the top 10 rated players in Nigeria who have been invited to contest for the National Champions titles. The Open Section has various categories which are options for any interested participant. Below are the eligibility guidelines, regulations, schedules, prizes and registration routes for the various categories of the Open Section. 
                    </p>
                </div>
                <div class="master">
                    <p>
                        <b>
                            MASTERS:
                        </b> 
                        Players with FIDE Ratings of 2000 and above 
                    </p>
                    <p>
                        <b>
                            U2000:
                        </b> 
                        Players with FIDE Ratings below 2000
                    </p>
                    <p>
                        <b>
                            UNDER 20:   
                        </b> 
                        Players below the age of 20 before the 1st of January, 2022
                    </p>
                    <p>
                        <b>
                            UNDER 14:     
                        </b> 
                        Players below the age of 14 before the 1st of January, 2022
                    </p>
                    <p>
                        <b>
                            UNDER 10:     
                        </b> 
                        Players below the age of 10 before the 1st of January, 2022
                    </p> 
                </div>
                <div class="diffent">
                    <p>
                        *The Masters category is also open to U2000 players who wish to compete in the Masters . 
                    </p>
                    <p>
                        **Players rated above 2000 are NOT ELIGIBLE to compete in the U2000 category,
                    </p>
                </div>
                <!-- <div class="col-md-12">
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
                </div> -->
            </div>
            <!-- <div class="col-md-12">
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
            </div> -->
            <div class="col-md-12">
                <div style="padding-top: 10px;">
                    <h5 class="text-center py-3"><b>REGULATIONS FOR MASTERS AND U2000 CATEGORIES OF THE OPEN SECTION</b></h5>
                    <p><b>Date:</b> 6th - 9th October, 2022 </p>
                    <p><b>Venue:</b>Orchid-Lekki Chess Club (OLCC)
                        Orchid Hotel, Plot 3, Orchid Road, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos.
                    </p>
                    <p><b>Format:</b> Swiss System (Dutch); 7 Rounds (Rated)</p>
                    <p><b>Categories : 1. Masters Category  2. Open Category </b>
                    </p>
                    <p><b>Eligibility :</b> Only open to players rated 2000
                    </p>
                    <p>
                        <b>
                            Time Control:
                        </b>
                        G/90 +30): 90 minutes with an addition of 30 seconds (increment) per move starting from move one.
                    </p>
                    <p>
                        <b>
                            Tie-break Criteria
                        </b>
                        The following tie-breaks will be used for the purposes of the cross table and any special prizes or trophies:
                            1. Direct Encounter 
                    2. Most Blacks
                    3. Koya System
                    4. Sonneborn Berger
                    5. Won Games
                    <br>
                    <div style="color: red;">
                    *FIDE Fair Play & Anti-cheating Rules Apply
                    </div>
                    </p>

                    <p><b>Registration Window:</b> Registration closes on October 1, 2022. No registrations will be accepted after October 1, 2022.</p>
                    <p><b>Registration Fee:</b> Masters Category- ₦10,000.00 </p>
                    <p><b>Late Registration Fee:</b>U2000 category - ₦7,000.00</p>
                    <p>
                        <b>
                        Exemptions: 
                        </b>
                    All IM, WIM, FM, and WFM titled players are exempted from paying registration fees before registration deadline elapses. 
                    </p>
                    <p>
                        <b>
                        Total Prize Fund: ₦ 2,910,000.00
                        </b>
                    </p>
                    <div class="btn-div">
                        <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PLAYING SCHEDULE FOR MASTERS AND U2000 CATEGORIES OF THE 
                        OPEN SECTION
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Event</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">6th October </td>
                        <td>9am </td>
                        <td>Accreditation of Players</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>10am</td>
                        <td>Round 1</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3pm</td>
                        <td>Round 2</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">7th October </td>
                        <td>10am </td>
                        <td>Round 3</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3pm</td>
                        <td>Round 4</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">8th October </td>
                        <td>10am </td>
                        <td>Round 5</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3pm</td>
                        <td>Round 6</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">9th October </td>
                        <td>11am </td>
                        <td>Round 7</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Closing Ceremony </td>
                        <td>Closing Ceremony </td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PRIZES FOR MASTERS CATEGORY
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>300,000.00 </td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>250,000.00 </td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>220,000.00</td>
                      </tr>
                      <tr>
                        <td>4th </td>
                        <td>200,000.00</td>
                      </tr>
                      <tr>
                        <td>5th </td>
                        <td>150,000.00</td>
                      </tr>
                      <tr>
                        <td>6th </td>
                        <td>100,000.00</td>
                      </tr>
                      <tr>
                        <td>7th </td>
                        <td>70,000.00</td>
                      </tr>
                      <tr>
                        <td>8th </td>
                        <td>50,000.00</td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>UNDER 2000 CATEGORY
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>120,000.00 </td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>80,000.00 </td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>50,000.00</td>
                      </tr>
                      <tr>
                        <td>4th </td>
                        <td>40,000.00</td>
                      </tr>
                      <tr>
                        <td>5th </td>
                        <td>30,000.00</td>
                      </tr>
                      <tr>
                        <td>6th </td>
                        <td>20,000.00</td>
                      </tr>
                      <tr>
                        <td>7th </td>
                        <td>20,000.00</td>
                      </tr>
                      <tr>
                        <td>8th </td>
                        <td>20,000.00</td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PRIZES FOR BEST LADIES 
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>60,000.00 </td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>30,000.00</td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>10,000.00</td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12" style="padding-top: 30px;">
                <h5 class="text-center py-3">
                    <b>
                        GUIDELINES FOR THE JUNIOR CATEGORIES 
                    </b>
                </h5>
                <p>
                    <b>
                        Eligibility for Junior Tournament:
                    </b> 
                    Players eligible to be considered as winners in the Under 20, Under 14, Under 10 categories must be below the ages of 20 years, 14 years, and 10 years before the 1st of January 2022.
                </p>
            </div>
            <div class="col-md-12">
                <div class="col-md-12" style="padding-top: 30px;">
                    <h5><b>REGULATIONS FOR THE JUNIOR CATEGORIES</b></h5>
                    <p><b>Date:</b> 4th - 5th October, 2022 </p>
                    <p><b>Venue:</b>Orchid-Lekki Chess Club (OLCC) Orchid Hotel, Plot 3, Orchid Road, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos</p>
                    <p>
                        <b>
                            Format:
                        </b>
                        Swiss System (Dutch); 6 Rounds (Rated)
                    </p>
                    <p><b>Time Control:</b> ((G/45 +15): 45 minutes for the game with an addition of 15 seconds (increment) per move starting from move one. <br>
                    <b>
                    Tie-break Criteria
                    </b>
                        1. Direct Encounter
                        2. Greater number of victories
                        3. Buchholz
                        4. Sonneborn-Berger
                        <br>
                        <div style="color:red; font-style:italic;">
                        *FIDE Fair Play & Anti-cheating Rules Apply
                        </div>
                        </p>
                    <p><b>Start Time:</b> 8am – 9.30am: Accreditation of players 10am: round 1</p>
                    <p><b>Format:</b> Swiss System (Dutch); 6 Rounds (Rated)</p>
                    
                    <p><b>Registration Window:</b> on October 1, 2022. </p>
                    <p><b>Registration Fee:</b>U20: ₦5,000 | U-14: ₦5,000 |U-10: ₦5,000</p>
                    <p><b>Late Registration Fee:</b> ₦5,000.00</p>
                    <p><b>Exemptions: </b> All IM, WIM, FM, and WFM titled players are exempted from paying registration fees before registration deadline elapses. </p>
                    <p>
                        <b>
                            Prize Categories :
                        </b>
                        U-20 1st- 5th |
                        U-14 1st- 5th |
                        U-10 1st- 5th |
                    </p>
                    <p><b>Sections:</b> Under-20 | Under-14 | Under-10</p>
                    <div class="btn-div">
                        <a href="junior-tournament.php" class="btn-register">To Register</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PRIZES FOR UNDER-20 CATEGORY 
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                      <th>CATEGORY </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>100,000.00</td>
                        <td>Under-20</td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>70,000.00</td>
                        <td>Under-20</td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>60,000.00</td>
                        <td>Under-20</td>
                      </tr>
                      <tr>
                        <td>4th</td>
                        <td>50,000.00</td>
                        <td>Under-20</td>
                      </tr>
                      <tr>
                        <td>5th</td>
                        <td>40,000.00</td>
                        <td>Under-20</td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PRIZES FOR UNDER-14 CATEGORY
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                      <th>CATEGORY </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>50,000.00</td>
                        <td>Under-14 </td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>40,000.00</td>
                        <td>Under-14 </td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>30,000.00</td>
                        <td>Under-14 </td>
                      </tr>
                      <tr>
                        <td>4th</td>
                        <td>20,000.00</td>
                        <td>Under-14 </td>
                      </tr>
                      <tr>
                        <td>5th</td>
                        <td>15,000.00</td>
                        <td>Under-14 </td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PRIZES FOR UNDER-10 CATEGORY
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                      <th>CATEGORY </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>30,000.00</td>
                        <td>Under-10 </td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>20,000.00</td>
                        <td>Under-10 </td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>10,000.00</td>
                        <td>Under-10</td>
                      </tr>
                      <tr>
                        <td>4th</td>
                        <td>7,000.00</td>
                        <td>Under-10</td>
                      </tr>
                      <tr>
                        <td>5th</td>
                        <td>7,000.00</td>
                        <td>Under-10</td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>
                        PLAYING SCHEDULE ATTACHED
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>DATE</th>
                      <th>TIME</th>
                      <th>EVENT</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">4th October </td>
                        <td>8am-10am </td>
                        <td>Accreditation of Players</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>11am</td>
                        <td>Round 1</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>12.30pm</td>
                        <td>Round 2</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>3pm</td>
                        <td>Round 3</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>10am</td>
                        <td>Round 4</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;">5th October </td>
                        <td>10am </td>
                        <td>Round 5</td>
                      </tr>
                      <tr>
                        <td style="border-bottom: 1px solid #fff;"></td>
                        <td>12.30pm</td>
                        <td>Round 6</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3pm</td>
                        <td>Round 7</td>
                      </tr>
                      <tr>
                        <td>14th October</td>
                        <td>Award and Prize Giving Ceremony </td>
                        <td>Award and Prize Giving Ceremony</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-md-12">
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
            </div> -->
            <div class="col-md-12" style="padding-top: 30px;">
                <h5 class="text-center py-3">
                    <b>
                        BLITZ TOURNAMENT 
                    </b>
                </h5>
                <p>
                    The Blitz Tournament at NCC 2022 is a one day tournament and is open to players of every category. 
                </p>
            </div>
            <div class="col-md-12">
                <div class="col-md-12" style="padding-top: 30px;">
                    <h5 class="text-center py-3"><b>REGULATIONS FOR THE BLITZ TOURNAMENT</b></h5>
                    <p><b>Date:</b>3rd October, 2022 </p>
                    <p><b>Venue:</b> Orchid-Lekki Chess Club, Orchid hotels, Plot 3, Dream Africana Way, near Chevron Toll Gate, Lekki-Epe Expressway, Lagos. </p>
                    <p><b>Format:</b> Swiss System (Dutch); 11 Rounds (Rated)</p>
                    <p><b>Time Control:</b> (G/5 +2): 5 minutes for the game with an addition of 2 seconds (increment) per move starting from move one.
                </p>
                    <p>
                        <b>
                        Tie-break Criteria:
                        </b>
                        Playoffs <br>
                        <div style="color:red; font-style:italic;">
                        *FIDE Fair Play & Anti-cheating Rules Apply
                        </div>
                    </p>
                    <p><b>Start Time:</b> 8am – 10am: Accreditation of players 11am: round 1</p>
                    <p><b>Registration Window:</b> 1 October, 2022</p>
                    <p><b>Registration Fee:</b>₦5,000.00</p>
                    <p><b>Late Registration Fee:</b> ₦5,000.00</p>
                    <p>
                        <b>
                        Registration closes on October 1, 2022. No registrations will be accepted after October 1, 2022.
                        </b>
                    </p>
                    <p>
                        <b>
                        Prize Categories : 
                        </b>
                        1st - 9th
                        Best Female

                    </p>
                    <div class="btn-div">
                        <a href="blitz-reg.php" class="btn-register">To Register</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-center py-3">
                    <b>PRIZES FOR THE BLITZ TOURNAMENT
                    </b>
                </h5>
                <table class="table">
                    <thead>
                      <th>POSITION</th>
                      <th>PRIZE (₦)</th>
                      <th>CATEGORY </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1st </td>
                        <td>100,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>2nd </td>
                        <td>70,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>3rd </td>
                        <td>55,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>4th </td>
                        <td>45,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>5th </td>
                        <td>35,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>6th </td>
                        <td>20,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>7th </td>
                        <td>15,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>8th </td>
                        <td>12,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>9th </td>
                        <td>12,000.00</td>
                        <td>Blitz</td>
                      </tr>
                      <tr>
                        <td>Best Female </td>
                        <td>10,000.00</td>
                        <td>Blitz</td>
                      </tr>
                    </tbody>
                </table>
                <div class="btn-div">
                    <a href="https://www.olchessclub.com/ocr/form.php" class="btn-register">To Register</a>
                    
                </div>
            </div>
            <div class="col-md-12 py-3">
                <h4><u>NOTES</u></h4>
                <!--
                <p><b>NCC Selection Criteria:</b> Selection of the top players to be invited will be based on the eligible players FIDE rating as at 1st September 2021. 18 players will be selected by rating while 2 players will be selected as wild cards. Wild cards election is at the discretion of the Nigeria Chess Federation.</p>
                -->
                <p><b>Prize Winners: </b>Any player who is eligible for a prize in more than one category will be given the option to choose his/her preferred prize. No player can win prizes in two categories.</p>
                <p><b>Default Time:</b> Default time for the open and junior tournaments will be 30 minutes.</p>
                <!--
                <p><b>Accommodation & Feeding:</b> Accommodation & Feeding will be provided only for the 20 players participating in the NCC Invitational Tournament, and the officials (Arbiters, NCF officials & Technical Staff).</p>
                -->
            </div>
            <div class="col-md-12 text-right py-3">
                <a href="index.php" style="padding:10px 25px; color: #fff; background-color: #B6393B">Back To Home Page</a>
            </div>
        </div>
    </div>


    <!-- <div class="container-fluid container-download">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>To Make Payment, Click The Button Below</h2>
                <a href="pay.php" class="btn btn-download">Pay Now</a>
            </div>
        </div>
    </div> -->

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