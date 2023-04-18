<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Open Categories</title>
        <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
        <style>
            body{background-color:#ffe2e2;padding:20px 10px}.form-area{background-color:#fff;border-radius:10px;box-shadow:0 0 10px -5px #000}.form-area h2{padding-top:20px}.form-area p{font-size:17px}.form-area label{font-size:18px;font-weight:600}.form-area span{color:red}.input-one{width:60%}.input-two{width:100%}.input-one,.input-two{border-top:none;border-left:none;border-right:none;padding:10px 1px;border-bottom:1px solid #000}.input-one:focus,.input-two:focus{outline:0!important;border-bottom:2px solid #c9383d}.input-radio:after{width:1.2em;height:1.2em;border-radius:15px;top:-5px;left:-5px;position:relative;background-color:#fff;content:'';display:inline-block;visibility:visible;border:1px solid #000;margin-right:10px!important}.input-radio:checked:after{background-color:#c9383d}.input-check{-ms-transform:scale(1.5);-moz-transform:scale(1.5);-webkit-transform:scale(1.5);-o-transform:scale(1.5);transform:scale(1.5);padding:10px;margin-right:5px}.input-submit{background-color:#c9383d;color:#fff;padding:8px 30px;border:none;border-radius:10px}.input-submit:hover{background-color:#b2292d}.input-reset{background-color:none;color:#000;font-weight:700;border:none;padding-top:8px}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-area">
                        <div class="col-lg-12 text-center">
                            <a href="index.php">
                                <img src="reg-logo.png" width="60%">
                            </a>
                        </div>
                    </div>
                    <div class="form-area" style="border-top: 6px solid #C9383D; margin-top: 10px; margin-bottom: 10px;">
                        <div class="col-lg-12 text-center">
                            <h2>Open Categories Registration Form</h2>
                            <p class="text-left">*Due to COVID 19 protocols, total number of participants will be limited to the first 100 successful responses</p>
                            <p class="text-left" style="margin-top: -10px;">**Registration closes 6th November 2021.</p>
                            <p class="text-left" style="margin-top: -10px; padding-bottom: 25px;"><b>Fields with <span>*</span> are compulsory</b></p>
                        </div>
                    </div>
                    <form action="process/processopencategories.php" method="post">
                        <!--Email Here-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Email <span>*</span></label> <br>
                                <input type="email" class="input-one" placeholder="Your email" name="email" required>
                            </div>
                        </div>
                        <!--Full Name-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Full Name (surname, first name, other names) <span>*</span></label> <br>
                                <input type="text" class="input-two" placeholder="Your answer" name="full_name" required>
                            </div>
                        </div>
                        <!--Gender-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Gender <span>*</span></label> <br>
                                <input type="radio" value="Male" class="input-radio" name="gender" required> Male
                                <br>
                                <input type="radio" value="Female" class="input-radio" name="gender" required> Female
                            </div>
                        </div>
                        <!--Date of birth-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Date Of Birth <span>*</span></label> <br>
                                <input type="date" class="input-one" placeholder="Your answer" name="date_of_birth" required>
                            </div>
                        </div>
                        <!--Tel Number-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Telephone Number <span>*</span></label> <br>
                                <input type="tel" class="input-one" placeholder="Your answer" name="telephone_number" required>
                            </div>
                        </div>
                        <!--Dou you have FIDE ID-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Do You Have FIDE ID?</label> <br>
                                <input type="radio" value="Yes" class="input-radio" name="fide" required> Yes
                                <br>
                                <input type="radio" value="No" class="input-radio" name="fide" required> No
                            </div>
                        </div>
                        <!--What Is Your FIDE ID?-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>What Is Your FIDE ID?</label> <br>
                                <input type="text" class="input-one" name="fi_de" placeholder="Your answer">
                            </div>
                        </div>
                        <!--Which Chess Club Do You Belong?-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Which Chess Club Do You Belong?</label> <br>
                                <input type="text" class="input-one" name="chess_club" placeholder="Your answer" required>
                            </div>
                        </div>
                        <!--Tournament Category-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>Tournament Category</label> <br>
                                <input type="radio" class="input-radio" value="Master (FIDE rating above 2000)" name="tournament_category" required> Master (FIDE rating above 2000)
                                <br>
                                <input type="radio" class="input-radio" value="Open (FIDE rating below 2000)" name="tournament_category" required> Open (FIDE rating below 2000)
                            </div>
                        </div>
                        <!--I agree-->
                        <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                            <div class="col-lg-12">
                                <label>I Agree To The Tournament Regulations <span>*</span></label> <br>
                                <input type="checkbox" class="input-check" name="I_agree" required> I Agree
                            </div>
                        </div>
                        <!--Submit & Reset-->
                        <div class="row py-3" style="margin-left: 6px;">
                            <div style="margin-right: 20px;">
                                <input type="submit" class="input-submit" name="submit" value="Submit">
                            </div>
                            <div class="text-right">
                                <input type="reset" class="input-reset" value="Clear Form">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </body>
</html>