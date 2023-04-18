<?php session_start();
if (!isset($_SESSION['adminlogged'])) {
    header("Location:login.php");
}
?>
<?php
include "../includes/head.php";
include "../includes/dbconnection.php";
include "../includes/alerts.php";
?>
<?php

if (isset($_GET['formedit'])) {
    $userid = $_GET['userid'];
    $sql = " SELECT * FROM users WHERE user_id = '$userid' ";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $user_id = $row['user_id'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $username = $row['username'];
            $user_type = $row['user_type'];
            $user_code = $row['user_code'];
            $user_phone = $row['user_phone'];
            $user_email = $row['user_email'];
            $user_gender = $row['user_gender'];
            $user_status = $row['user_status'];
            $fideno = $row["fide_number"];
            $fidetitle = $row["fide_title"];
            $bday = $row["user_bday"];
            $age = $row["user_age"];
            $chesslevel = $row["user_chesslevel"];
            $state = $row["user_state"];
            $street = $row["user_street"];
            $lga = $row["user_lga"];
            $membershipType = $row["user_membershiptype"];
            $lichessId = $row["user_lichessid"];
            $securityQuestion = $row["user_securityquestion"];
            $securityAnswer = $row["user_securityanswer"];
            $able = $row["user_disabled"];
        }
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

?>
<title> Admin| Dashboard </title>
</head>

<body>
    <section>
        <div class="container-fluid">
            <!-- mobile nav -->
            <?php include "../includes/adminmobile.php"; ?>

            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/adminside.php"; ?>

                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-12">
                            <ul class="inline topnav--content">
                                <li class="topnav--link"><i class="fa fa-user mr-2 text-comp"></i><span class="text-comp">Admin</span></li>
                            </ul>
                        </div>
                    </header>

                    <div class="row mt-2 mb-2">
                    </div>

                    <!-- user info -->
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4 class="text-white"><?php echo $user_firstname . ' ' . $user_lastname; ?></h4>
                                        </div>

                                        <div class="col-md-2">
                                            <?php
                                            if ($able == "yes") {
                                            ?>
                                                <form action="../process/processmembers.php" action="get">
                                                    <input type="hidden" name="userid" value="<?php echo $user_id; ?>">
                                                    <input type="submit" name="enable" value="Enable" class="btn btn-success">
                                                </form>

                                            <?php
                                            } else {

                                            ?>
                                                <form action="../process/processmembers.php" action="get">
                                                    <input type="hidden" name="userid" value="<?php echo $user_id; ?>">
                                                    <input type="submit" name="disable" value="Disable" class="btn btn-brand">
                                                </form>
                                            <?php
                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="../process/processmembers.php" action="get">
                                        <input type="hidden" name="userid" value="<?php echo $user_id; ?>">
                                        <div class="row">
                                            <div class="col-md-4 offset-md-4">
                                                <img src="../img/avatar.svg" class="img-fluid rounded" style="max-width:30%;margin:5px auto 10px 100px;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>First Name</b></label>
                                                <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $user_firstname; ?>">
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Surname</b></label>
                                                <input type="text" name="sname" class="form-control" placeholder="Surname" value="<?php echo $user_lastname; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for=""><b>User Name</b></label>
                                            <input type="text" name="nickname" class="form-control" placeholder="Nick Name" value="<?php echo $username; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b>OLCC Code</b></label>
                                            <input type="text" name="code" class="form-control" placeholder="Membership code" value="<?php echo $user_code. $user_id; ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Phone</b></label>
                                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $user_phone; ?>">
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Email</b></label>
                                                <input type="email" name="email" class="form-control" placeholder="Email"  value="<?php echo $user_email; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>State</b></label>
                                                <select name="state" class="form-control">
                                                    <option value="<?php echo $state; ?>">
                                                        <?php echo $state; ?></option>
                                                    <option>-- Choose State --</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="Akwa ibom">Akwa Ibom</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="FCT">FCT</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nassawara">Nassawara</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Kano">Zamfara</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Local govt</b></label>
                                                <input type="text" name="lga" class="form-control" placeholder="LGA" value="<?php echo $lga; ?>">
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Street</b></label>
                                                <input type="text" name="street" class="form-control" placeholder="Street address" value="<?php echo $street; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Birthday</b></label>
                                                <input type="date" name="date_of_birth" id="" class="form-control" value="<?php echo $bday; ?>">
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Sex</b></label>
                                                <select name="sex" id="" class="form-control">
                                                    <option value="<?php echo $user_gender; ?>">
                                                        <?php echo $user_gender; ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Age</b></label>
                                                <input type="text" name="age" id="" class="form-control" value="<?php echo $age; ?>">
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Chess level</b></label>
                                                <select name="chess_level" id="" class="form-control">
                                                    <option value="<?php echo $chesslevel; ?>">
                                                        <?php echo $chesslevel; ?></option>
                                                    <option value="NoviCe">Novice</option>
                                                    <option value="Beginner">Beginner</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Master">Master</option>
                                                    <option value="Expert">Expert</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>FIDE Title</b></label>
                                                <select name="title" id="" class="form-control">
                                                    <option value="<?php echo $fidetitle; ?>">
                                                        <?php echo $fidetitle; ?></option>
                                                    <option value="None">None</option>
                                                    <option value="NM">NM</option>
                                                    <option value="CM">CM</option>
                                                    <option value="FM">FM</option>
                                                    <option value="IM">IM</option>
                                                    <option value="GM">GM</option>
                                                    <option value="WNM">WNM</option>
                                                    <option value="WFM">WFM</option>
                                                    <option value="WIM">WIM</option>
                                                    <option value="WGM">WGM</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for=""><b>FIDE No</b></label>
                                                <input type="text" name="fide_id" class="form-control" placeholder="FIDE NO" value="<?php echo $fideno; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Membership Type</b></label>
                                                <select name="membership_type" class="form-control">
                                                    <option value="<?php echo $membershipType; ?>">
                                                        <?php echo $membershipType; ?></option>
                                                    <option value="Junior">Junior</option>
                                                    <option value="Senior">Senior</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Lichess ID</b></label>
                                                <input type="text" name="lichess_id" placeholder="Lichess ID" class="form-control" value="<?php echo $lichessId; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Security Question</b></label>
                                                <select name="security_question" class="form-control">
                                                    <option value="<?php echo $securityQuestion; ?>">
                                                        <?php echo $securityQuestion; ?></option>
                                                    <option value="In what city were you born?">In what city were you born?</option>
                                                    <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option>
                                                    <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                    <option value="What high school did you attend?">What high school did you attend?</option>
                                                    <option value="What is the name of your first school?">What is the name of your first school?</option>
                                                    <option value="What was the make of your first car?">What was the make of your first car?</option>
                                                    <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                                                    <option value="Where did you meet your spouse?">Where did you meet your spouse?</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Security Answer<b></label>
                                                <input type="text" name="security_answer" class="form-control" placeholder="Security Answer" value="<?php echo $securityAnswer; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Membership status</label>
                                                <select name="status" class="form-control">
                                                    <option value="<?php echo $user_status; ?>"><?php echo $user_status; ?></option>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" name="edit" value="Save" class="btn btn-primary">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Password change area -->
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h4 class="text-white">Change user password<i class="fa fa-lock kpi--icons kpi--icons-light"></i></h4>
                            </div>
                            <div class="card-body">
                                <form action="../process/processmembers.php" method="post">
                                    <div>
                                        <?php success_alert();
                                        error_alert(); ?>
                                    </div>
                                    <input type="hidden" name="userid" value="<?php echo $user_id; ?>">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder=" Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="cpassword" class="form-control" placeholder=" Confirm Password">
                                    </div>
                                    <input type="submit" name="memberpass" value="Change" class="btn btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>



<?php include "../includes/footer.php"; ?>