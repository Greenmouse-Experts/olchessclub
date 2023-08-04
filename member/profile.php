<?php session_start();
if(!isset($_SESSION['logged'])){
    header("Location:../member/login.php");
}
?>
<?php include "../includes/head.php";?>
<title> Profile | Dashboard </title>
</head>
<body>
    <section>
        <div class="container-fluid">
               <!-- mobile nav -->
               <?php include "../includes/mobile.php";?>
           
            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/side.php";?>

                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-6">
                            <span style="text-transform:capitalize"><?php echo $_SESSION['username'];?></span>
                            <span style="margin-left:15px;font-weight:bolder;"> <?php echo $_SESSION['code'];?><?php echo $_SESSION['user_id'];?></span>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </header>

                    <!-- profile -->
                    <div class="row mt-4">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white"> Profile <i class="fa fa-user kpi--icons kpi--icons-light"></i></h4>
                                </div>
                                <div class="card-body">
                                        <form action="../process/processprofile.php" method="post">
                                            <div class="row">
                                                <div class="col-md-4 offset-md-4">
                                                    <img src="../img/avatar.svg" class="img-fluid rounded" style="max-width:30%;margin:5px auto 10px 100px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>First Name</b></label>
                                                    <input type="text" name="fname" class="form-control" placeholder="First Name"
                                                    value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} ?>">
                                                </div>
                                                <div class="col">
                                                <label for=""><b>Surname</b></label>
                                                    <input type="text" name="sname" class="form-control" placeholder="Surname"
                                                    value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label for=""><b>User Name</b></label>
                                                <input type="text" name="nickname" class="form-control" placeholder="Nick Name"
                                                value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b>OLCC Code</b></label>
                                                <input type="text" name="code" class="form-control" placeholder="Membership code" readonly
                                                value="<?php if(isset($_SESSION['code'])){ echo $_SESSION['code'];} ?><?php if(isset($_SESSION['user_id'])){ echo $_SESSION['user_id'];} ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                <label for=""><b>Phone</b></label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                                    value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} ?>">
                                                </div>
                                                <div class="col">
                                                    <label for=""><b>Email</b></label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email" disabled
                                                    value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>State</b></label>
                                                    <select name="state"  class="form-control"> 
                                                    <option value="<?php if(isset($_SESSION['state'])){ echo $_SESSION['state'];} ?>">
                                                    <?php echo $_SESSION['state']; ?></option>
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
                                                    <input type="text" name="lga" class="form-control" placeholder="LGA"
                                                    value="<?php if(isset($_SESSION['lga'])){ echo $_SESSION['lga'];} ?>">
                                                </div>
                                                <div class="col">
                                                <label for=""><b>Street</b></label>
                                                    <input type="text" name="street" class="form-control" placeholder="Street address"
                                                    value="<?php if(isset($_SESSION['street'])){ echo $_SESSION['street'];} ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>Birthday</b></label>
                                                    <input type="date" name="date_of_birth" id="" class="form-control"
                                                    value="<?php if(isset($_SESSION['bday'])){ echo $_SESSION['bday'];} ?>">
                                                </div>
                                                <div class="col">
                                                    <label for=""><b>Sex</b></label>
                                                    <select name="sex" id="" class="form-control">
                                                    <option value="<?php if(isset($_SESSION['gender'])){ echo $_SESSION['gender'];} ?>">
                                                    <?php echo $_SESSION['gender']; ?></option>
                                                        <option value="Male" >Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>Age</b></label>
                                                    <input type="text" name="age" id="" class="form-control"
                                                    value="<?php if(isset($_SESSION['age'])){ echo $_SESSION['age'];} ?>">
                                                </div>
                                                <div class="col">
                                                    <label for=""><b>Chess level</b></label>
                                                    <select name="chess_level" id="" class="form-control">
                                                    <option value="<?php if(isset($_SESSION['chesslevel'])){ echo $_SESSION['chesslevel'];} ?>">
                                                    <?php echo $_SESSION['chesslevel']; ?></option>
                                                        <option value="NoviCe" >Novice</option>
                                                        <option value="Beginner">Beginner</option>
                                                        <option value="Intermediate" >Intermediate</option>
                                                        <option value="Master" >Master</option>
                                                        <option value="Expert">Expert</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>FIDE Title</b></label>
                                                    <select name="title" id="" class="form-control"  > 
                                                    <option value="<?php if(isset($_SESSION['fidetitle'])){ echo $_SESSION['fidetitle'];} ?>">
                                                    <?php echo $_SESSION['fidetitle']; ?></option>
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
                                                    <input type="text" name="fide_id" class="form-control" placeholder="FIDE NO"
                                                    value="<?php if(isset($_SESSION['fideno'])){ echo $_SESSION['fideno'];} ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>Membership Type</b></label>
                                                    <select name="membership_type" class="form-control">
                                                        <option value="<?php if(isset($_SESSION['membershipType'])){ echo $_SESSION['membershipType'];} ?>">
                                                        <?php echo $_SESSION['membershipType']; ?></option>
                                                        <option value="Junior">Junior</option>
                                                        <option value="Senior">Senior</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for=""><b>Lichess ID</b></label>
                                                    <input type="text" name="lichess_id" placeholder="Lichess ID" class="form-control"
                                                    value="<?php if(isset($_SESSION['lichessId'])){ echo $_SESSION['lichessId'];} ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for=""><b>Security Question</b></label>
                                                    <select name="security_question" class="form-control">
                                                        <option value="<?php if(isset($_SESSION['securityQuestion'])){ echo $_SESSION['securityQuestion'];} ?>">
                                                        <?php echo $_SESSION['securityQuestion']; ?></option>
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
                                                    <input type="text" name="security_answer" class="form-control" placeholder="Security Answer"
                                                    value="<?php if(isset($_SESSION['securityAnswer'])){ echo $_SESSION['securityAnswer'];} ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" value="Save" class="btn btn-primary" style="float: right;">
                                        </form>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>