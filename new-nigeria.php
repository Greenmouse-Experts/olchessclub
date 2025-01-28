<?php
// include "includes/dbconnection.php";
?>
<?php include "header.php" ?>

<style>
    .price-row {
        padding: 50px 30px;
        border-radius: 20px;
        background-image: url(price-bg.png);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat
    }

    .container-download {
        padding-top: 70px;
        padding-left: 20px;
        padding-bottom: 70px;
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

    @media (max-width:766px) {
        .book {
            margin-top: 10px !important
        }
    }

    .square-holder {
        padding: 30px;
        align-items: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background-color: #ffffff73;
        min-height: 50px;
        box-shadow: 0 0 15px rgba(54, 54, 54, .26);
        border-radius: 10px
    }

    .square-holder img {
        max-width: 100%;
        transition: all .3s
    }

    .register .line-hr {
        width: 50px;
        height: 2px;
        background-color: #366d2f;
        margin: auto
    }

    .register .box {
        padding: 30px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: 5px;
        background: #fff0f0;
        box-shadow: 0 0 20px 0 rgba(51, 51, 51, .075);
        transition: all .3s ease-in-out;
        text-align: center
    }

    .register .box:hover {
        transform: scale(1.1);
        background-color: #fff
    }

    .register .box h4 {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 15px
    }

    .register .btn-div {
        margin-top: 30px;
    }

    .register .btn-register {
        background-color: #b6393b;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
    }

    .register .btn-register:hover {
        background-color: #000;
    }

    /* NEWSLETTER */
    .section .text-btn h2 {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        padding: 0 0 15px 0;
    }

    .section .text-btn p {
        line-height: 1.8;
    }

    .section .text-btn p b {
        font-weight: 700;
        font-size: 18px;
    }

    /* NEWSLETTER ENDS */

    /*  CHANGE OPTION */
    .register h4 {
        color: #B6393B;
        font-style: italic;
    }

    .image-div img {
        display: block;
        margin: auto;
        width: 100%;
    }

    /*  CHANGE OPTION ENDS */
</style>
<div class="container-fluid mem-banner">
    <h1 style="font-size: 45px;">NEW NATIONAL CHESS CHAMPIONS EMERGE IN NIGERIA!</h1>
</div>

<!-- NEWSLETTER -->
<section class="section section-default" style="margin-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-btn">
                    <h2>
                    NEW NATIONAL CHESS CHAMPIONS EMERGE IN NIGERIA!
                    </h2>
                    <p>
                    Chess enthusiasts across Nigeria were treated to an unforgettable display of skill, determination, and resilience as new national chess champions emerged at the 2024 Nigeria National Chess Championship. The highly anticipated event, organized by the Orchid-Lekki Chess Club on behalf of the Nigeria Chess Federation, brought together the best players in the country, with each competitor vying for glory in their respective categories.
                    </p>
                    <p>
                    The championship faced challenges in a difficult economic year for Nigeria, nevertheless, some corporate sponsors came through. Orchid Hotel (Main Sponsor), Indomie, Lasena, Nepal Energy, End2End Logistics and Ibom Air are some of the brands that came through for the championship. The tournament was also supported by the FIDE Open Aid Project, to achieve its goals.
                    </p>
                    <p>
                    Seventeen-year-old Nyuima Ferdinand Tersee was the star of the show, putting on a breathtaking performance to clinch the title of National Chess Champion. Tying with FM Abdulrahman Abdulraheem Akintoye at 7.5 points after 11 grueling rounds, Ferdinand faced his experienced rival in a tense tiebreak finale. It was a moment of high drama as the young prodigy from Benue State displayed composure beyond his years, edging out his opponent in the decisive encounter.
                    </p>
                    <p>
                    By securing the title, Ferdinand etched his name into the history books as the youngest National Chess Champion Nigeria has ever produced. His victory is not just a personal achievement but a source of pride for his home state and the country at large. Looking ahead, Ferdinand is set to represent Nigeria on the continental stage at the 2025 Africa Individual Chess Championship (AICC), where he will aim to extend his remarkable run.
                    </p>
                    <p>
                    In the women’s category, Toritsemuwa Ofowino from Delta State lived up to her reputation with a commanding performance. Popularly known as "Toritse," she has long been regarded as one of Nigeria’s strongest female chess players. This year, she finally secured the coveted title of National Women’s Chess Champion, leaving no doubt about her dominance. Toritse outclassed her opponents, finishing well ahead in what many described as one of the most commanding victories in the competition’s history. Her success is a testament to her skill, hard work, and resilience, and she is poised to remain a key figure in Nigerian chess for years to come.
                    </p>
                    <p>
                    The Masters section saw a thrilling showcase of expertise, with Bartholomew Okhipo proving his mettle. Representing Edo State, Okhipo reminded the chess community why he is considered one of Nigeria’s finest players on his day. He swept aside most of his opponents, delivering a series of impressive victories. His only blemish came against Afam Ndidi Ernest, who managed to secure a hard-fought draw. Despite this, Okhipo’s dominance throughout the tournament left no doubt about his superiority, earning him a well-deserved title.
                    </p>
                    <p>
                    In the rating category for players below 2000, Izuogwu Michael—affectionately known as "Mickey"—staged a remarkable comeback after a slow start. As the rounds progressed, Mickey hit his stride and became virtually unstoppable, showcasing a mix of tactical brilliance and strategic depth. In the end, he finished half a point ahead of his closest rivals, claiming the title in what was a highly competitive field.
                    </p>
                    <p>
                    The Junior (U20) category was dominated by 14-year-old Ekunke Goodness Odeh, who delivered a masterclass in consistency and composure. Goodness went unbeaten throughout the tournament, recording four wins and two draws from six games. His remarkable performance, which placed him half a point ahead of his older rivals, secured him the U20 champion’s trophy. Many observers see Goodness as a rising star in Nigerian chess, and his victory in this category underscores his immense potential.
                    </p>
                    <p>
                    In the U14 category, the competition was fierce, but it was nine-year-old Bayefa Oyeinkeperemo who emerged victorious. Bayefa finished tied on points with Adekanye Adejuwon Arif, but his superior tiebreak score earned him the title. This triumph is a significant milestone in Bayefa’s budding chess career, and he is already being tipped as one to watch in the years ahead.
                    </p>
                    <p>
                    Finally, the U10 category produced an outstanding performance from Nwankwo Jason Somtochukwu. The young talent scored a perfect 6/6, dominating his peers and leaving no doubt about his superiority. Jason’s flawless record in such a competitive field highlights his extraordinary talent and potential as he continues to develop in the sport.
                    </p>
                    <p>
                    The 2024 Nigeria National Chess Championship not only celebrated the champions but also showcased the depth of talent in Nigerian chess. From seasoned professionals to promising young stars, the tournament highlighted the country’s growing strength in the sport. As these champions prepare for future competitions, their performances will undoubtedly inspire the next generation of players across Nigeria.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- NEWSLETTER Ends -->
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
        <p>© 2024 Orchid Lekki Chess Club (OLCC). All Rights Reserved.</p>
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