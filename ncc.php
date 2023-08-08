<?php
include "includes/dbconnection.php";
?>
<?php include "header.php" ?>
<title>National Chess Championship (NCC) | Orchid-Lekki Chess Club</title>
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

  .register {
    margin-top: -40px;
  }

  .register .line-hr {
    width: 50px;
    height: 2px;
    background-color: #560E12;
    margin: auto
  }

  .register .box {
    padding: 30px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    margin: 20px;
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
    font-size: 25px
  }

  .register .btn-div {
    margin-top: 30px
  }

  .register .btn-register {
    background-color: #560E12;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    border-radius: 10px
  }

  .register .btn-register:hover {
    background-color: #c94a4a
  }
</style>
<div class="container-fluid mem-banner">
  <h1 style="font-size: 45px;">National Chess Championship (NCC)</h1>
</div>

<div class="container">
  <div class="row body1-flex-cont">
    <div data-aos="fade-right" class="col-md-6">
      <h3>The <span class="body1-color">National Chess Championship (NCC)</span></h3>
      <p style="font-size: 16px !important;"><strong>The National Chess Championship (NCC)</strong> is the Nigeria's most important chess competition. It is the event that produces the male and female chess champions of the country and in many ways symbolizes the development of the sport in Nigeria.</p>
      <p style="font-size: 16px !important;">The 2021 edition of the competition is scheduled for November 8 to November 14, 2021 and it is set to be a celebration of the best of Nigeria with world class organisation delivered using all of today's social media channels.</p>
      <p style="font-size: 16px !important;">The highly anticipated event will be held in Lagos and can be classified under the sports and education sectors due to the dual nature of chess as a sporting and education platform.</p>
    </div>
    <div class="col-md-1"></div>
    <div data-aos="fade-left" class="col-md-5" style="margin-top: 2px;">
      <img src="bg-ches.png" width="100%" alt="image">
    </div>
  </div>
</div>

<!--
    <div class="container" style="margin-top: -90px;">
        <div class="row body1-flex-cont">
            <div data-aos="fade-right" class="col-md-12">
                <h3>The <span class="body1-color">Tournament Details</span></h3>
                <p style="font-size: 16px !important;"><strong>A. The Main Event</strong> <br>
                This is invitational, limited to the best male and female players in the country and will determine the national male and female chess champions. Twenty players will compete in this category.
                </p>
                <a href="https://www.olchessclub.com/NCCMain.php" style="padding: 10px 20px; border-radius: 5px; color: #fff; background-color: #560E12;">Know More</a>
                <br>
                <p style="font-size: 16px !important; padding-top: 30px;"><strong>B. The Open Event</strong> <br>
                This is a more open side event with categories for men, women and children. About one hundred players will compete in this category.
                </p>
                <a href="https://www.olchessclub.com/NCCOpen.php" style="padding: 10px 20px; border-radius: 5px; color: #fff; background-color: #560E12;">Know More</a>
            </div>
            <div data-aos="fade-left" class="col-md-6">
                
            </div>
        </div>
    </div>
    -->

<section class="register" style="margin-top; 80px; margin-bottom: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center py-4">
        <h2><b>The Tournament Details</b></h2>
        <div class="line-hr"></div>
      </div>
      <div class="col-lg-6">
        <div class="box">
          <h4>NCC Main Event</h4>
          <p>This is invitational, limited to the best male and female players in the country and will determine the national male and female chess champions. Twenty players will compete in this category.</p>
          <div class="btn-div">
            <a href="NCCMain.php" class="btn-register">Enter</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="box">
          <h4>NCC Open Section</h4>
          <p>This is a more open side event with categories for men, women and children. About one hundred players will compete in this category.</p>
          <div class="btn-div">
            <a href="NCCOpen.php" class="btn-register">Enter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-default" style="margin-top: 50px;">
  <div class="container">
    <strong>
      <div class="row">
        <div class="text-center col-md-12">
          <h2 style="padding-bottom: 15px;"><b>Main Sponsors</b></h2>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="square-holder">
            <img alt="logo" src="pt12.png" />
          </div>
        </div>
        <div class="col-lg-5">
          <div class="square-holder">
            <img alt="logo" src="pt10.png" />
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="text-center col-md-12">
          <h2 style="padding-bottom: 15px; padding-top: 30px;"><b>Other Sponsors</b></h2>
        </div>
        <div class="col-lg-4">
          <div class="square-holder">
            <img alt="logo" src="pt13.png" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="square-holder">
            <img alt="logo" src="pt5.png" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="square-holder">
            <img alt="logo" src="pt4.png" />
          </div>
        </div>
        <div class="text-center col-md-12">
          <h2 style="padding-bottom: 15px; padding-top: 30px;"><b>Supported By</b></h2>
        </div>
        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt2.png" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt3.jpeg" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt6new.png" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt7newss.png" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt8.png" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt9.png" />
          </div>
        </div>

        <div class="col-lg-3">
          <div class="square-holder">
            <img alt="logo" src="pt11.png" />
          </div>
        </div>
      </div>
    </strong>
  </div>
</section>

<div class="container-fluid container-download">
  <div class="row">
    <div class="col-md-12 text-center">
      <h2>For More Information & Enquires</h2>
      <a href="http://www.olchessclub.com/contact-us.php" class="btn btn-download">Contact Us</a>
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
    offset: 100,
    duration: 1500
  });
</script>
<script src="js/index.js"></script>
</body>

</html>