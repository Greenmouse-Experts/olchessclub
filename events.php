<?php
include "includes/dbconnection.php";
?>
<?php include "header.php" ?>
<title>Events | Orchid-Lekki Chess Club</title>
<div class="container-fluid team-banner">
    <h1>Events</h1>
</div>
<div class="container-fluid team-body1">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-stripped table-bordered">
                <thead>
                    <th></th>
                    <th>Name</th>
                    <th>Eligibility</th>
                    <th>Description</th>
                    <th>Venue</th>
                    <th>Date</th>
                    <th>Time</th>
                </thead>
                <tbody>
                    <?php
                    $sql = " SELECT * FROM event ORDER BY event_date DESC ";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            $n = 1;
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                $event_id = $row['event_id'];
                                $event_name = $row['event_name'];
                                $event_date = $row['event_date'];
                                $event_time = $row['event_time'];
                                $event_details = $row['event_details'];
                                $event_venue = $row['event_venue'];
                                $attendee = $row['event_attendee'];

                    ?>

                                <tr>
                                    <td><?php echo $n; ?></td>
                                    <td><?php echo  $event_name; ?></td>
                                    <td><?php echo  $attendee; ?></td>
                                    <td><?php echo  $event_details; ?></td>
                                    <td><?php echo  $event_venue; ?></td>
                                    <td><?php echo  $event_date; ?></td>
                                    <td><?php echo  $event_time; ?></td>

                                </tr>

                    <?php
                                $n++;
                            }
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }


                    ?>

                </tbody>
            </table>
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