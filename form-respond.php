<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="Chess Club Form">
    <link rel="icon" href="assetss/images/logo (2).png">
    <title>Form Respond</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Scroll In Animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="app.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    body {
        background-color: #ffe2e2;
        padding: 20px 10px
    }

    .form-area {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px -5px #000
    }

    .form-area h2 {
        padding-top: 20px
    }

    .form-area p {
        font-size: 17px
    }

    .form-area label {
        font-size: 18px;
        font-weight: 600
    }

    .form-area span {
        color: red
    }

    .input-one {
        width: 60%
    }

    .input-two {
        width: 100%
    }

    .input-one,
    .input-two {
        border-top: none;
        border-left: none;
        border-right: none;
        padding: 10px 1px;
        border-bottom: 1px solid #000
    }

    .input-one:focus,
    .input-two:focus {
        outline: 0 !important;
        border-bottom: 2px solid #c9383d
    }

    .input-radio:after {
        width: 1.2em;
        height: 1.2em;
        border-radius: 15px;
        top: -5px;
        left: -5px;
        position: relative;
        background-color: #fff;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 1px solid #000;
        margin-right: 10px !important
    }

    .input-radio:checked:after {
        background-color: #c9383d
    }

    .input-check {
        -ms-transform: scale(1.5);
        -moz-transform: scale(1.5);
        -webkit-transform: scale(1.5);
        -o-transform: scale(1.5);
        transform: scale(1.5);
        padding: 10px;
        margin-right: 5px
    }

    .input-submit {
        background-color: #c9383d;
        color: #fff;
        padding: 8px 30px;
        border: none;
        border-radius: 10px
    }

    .input-submit:hover {
        background-color: #b2292d
    }

    .input-reset {
        background-color: none;
        color: #000;
        font-weight: 700;
        border: none;
        padding-top: 8px
    }
</style>

<body style="background-color: #FFE2E2;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="form-area">
                    <div class="col-lg-12 text-center">
                        <a href="index.php">
                            <img src="image.png" width="70%">
                        </a>
                    </div>
                </div>
                <form>
                    <!--Parent/Guardian Details-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Parent/Guardian Details
                                <span>*</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="full_name" required>
                        </div>
                    </div>
                    <!--Parent/Guardian's Phone Number-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Parent/Guardian's Phone Number
                                <span>*</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="email" required>
                        </div>
                    </div>
                    <!--Parent/ Guardian Email Address-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Parent/ Guardian Email Address
                                <span>*</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="email" required>
                        </div>
                    </div>
                    <!--Gender-->
                    <!--I agree-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>I HEREBY GIVE MY CONSENT TO MY CHILD/WARD TO PARTICIPATE IN THE TOURNAMENT.
                                <span>*</span></label> <br>
                            <input type="checkbox" class="input-check" name="I_agree" required> I Agree
                        </div>
                    </div>
                    <!--Submit & Reset-->
                    <div class="row py-3">
                        <div class="col-lg-6">
                            <div style="margin-right: 20px;">
                                <a href="#">
                                    <button type="submit" class="input-submit">
                                        Submit
                                    </button>
                                    <!-- <input type="submit" class="input-submit" name="submit" value="Submit"> -->
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-12">
                    <div style="margin-right: 20px;">
                        <a href="juniorform.php">
                            <button class="input-submit" style="float: right;">
                                Back
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>

</html>