<?php session_start();?>
<?php include "includes/alerts.php";?>
<?php include"includes/dbconnection.php"?>
<?php include "header.php"?>
<title>Vacancy | Orchid-Lekki Chess Club</title>
    <div class="container-fluid mem-banner">
        <h1>Openings</h1>
        <div class="flash"><?php success_alert();?></div>
    </div>
    <div class="container-fluid" style="background-color:black;">
            <div class="container">
                <div class="row">
                <?php
                        
                        $sql= " SELECT * FROM jobs ";
                        if($result = mysqli_query($conn,$sql)){ 
                                if (mysqli_num_rows($result)>0){
                                
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){  
                                        $jobid = $row['job_id'];    
                                        $job_title = $row['job_title'];
                                        $job_dsc = $row['job_dsc'];
                                        $deadline = $row['deadline'];
                                        ?>
                                        <div class="col-md-6">
                                            <a class="job-link" href="apply.php?job=<?php echo $jobid;?>">
                                                <div class="jobs">
                                                    <h2 style="text-transform:capitalize;"><?php echo $job_title?></h2>
                                                    <p> <?php echo $job_dsc?></p>  
                                                    <i class="fas fa-clock pr-2"></i><?php echo $deadline?>
                                                </div>
                                            </a>
                                        </div>
                                    <?php  
                                
                                }
                                }   
                            }else { 
                                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                            } 

                    
                        ?>
                                
                </div>
            </div>
    </div>
     <div class="container-fluid mem-banner">
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