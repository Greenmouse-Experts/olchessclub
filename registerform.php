<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Categories</title>
    <script src="https://kit.fontawesome.com/427654d872.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
    <script src="https://js.paystack.co/v1/inline.js"></script>
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

        /* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));

            background: -webkit-radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 150ms infinite linear;
            -moz-animation: spinner 150ms infinite linear;
            -ms-animation: spinner 150ms infinite linear;
            -o-animation: spinner 150ms infinite linear;
            animation: spinner 150ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
        }

        /* Animation */
        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <?php session_start();?>
    <?php
    // Set your Paystack public key here
    $public_key = 'pk_live_3d2d203e69d23399e23ea211098081d8ac1bb8eb';
    // $public_key = 'pk_test_e70dd8d884e77ece55cd721591fe3e223698691e';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if($_POST['tournament_category'] == 'Master (2000)') 
        {
            $amount_payable = 11000;
        }
        else 
        {
            $amount_payable = 8000;
        } 

        $dateTime = new DateTime();
        $registration_id =  1;
        $amount = $amount_payable * 100; // Paystack requires the amount in kobo (1 Naira = 100 kobo)
        $email = $_POST['email'];
        $first_name = $_POST['first_name']; 
        $last_name = $_POST['last_name']; 
        $gender = $_POST['gender']; 
        $telephone_number = $_POST['telephone_number']; 
        $date_of_birth = $_POST['date_of_birth']; 
        $fide = $_POST['fide']; 
        $chess_club = $_POST['chess_club']; 
        $tournament_category = $_POST['tournament_category']; 
        $I_agree = $_POST['I_agree']; 
        $payment = 'Paid';
        $paid_at = $dateTime->format('F j, Y g:i:s A');
        $reference = "OC_" . uniqid(); // Generate a unique payment reference

        // Save the payment details to your database or session for verification after payment

        // Redirect to the payment page
        echo '<script src="https://js.paystack.co/v1/inline.js"></script>';
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    var loader = document.querySelector(".loader");
                    var handler = PaystackPop.setup({
                        key: "' . $public_key . '",
                        email: "' . $email . '",
                        amount: ' . $amount . ',
                        currency: "NGN",
                        ref: "' . $reference . '",
                        callback: function(response) {
                            // This function executes after a successful payment
                            // You can handle the payment verification here
                            // For example, you can make an AJAX call to your server to verify the payment
                            // and process the order if the payment is successful.
                            
                            // Send the payment reference to process_payment.php for verification
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "process/open_section_2023.php", true);
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    var result = JSON.parse(xhr.responseText);
                                    if (result.status === "success") {
                                        // Redirect the user to a success page
                                        window.location.href = "success/open_section_success.php";
                                    } else {
                                        alert("Payment verification failed. Please try again later.");
                                    }
                                }
                            };
                            // Hide loader
                            loader.style.display = "inline-block";
                            xhr.send("reference=" + encodeURIComponent(response.reference) + "&registration_id=" + "' . $registration_id . '" + "&first_name=" + "' . $first_name . '" + "&last_name=" +  "' . $last_name . '" + "&gender=" +  "' . $gender . '" + "&email=" +  "' . $email . '" + "&telephone_number=" +  "' . $telephone_number . '" + "&date_of_birth=" +  "' . $date_of_birth . '" + "&fide=" +  "' . $fide . '" + "&chess_club=" + "' . $chess_club . '" + "&tournament_category=" +  "' . $tournament_category . '" + "&I_agree=" +  "' . $I_agree . '" + "&payment=" +  "' . $payment . '" + "&paid_at=" +  "' . $paid_at . '");
                        },
                        onClose: function() {
                            alert("Payment window closed.");
                        }
                    });
                    handler.openIframe();
                });
            </script>';
    }
    ?>
    <div class="loading loader" style="display: none;">Loading</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="form-area">
                    <div class="col-lg-12 text-center">
                        <a href="index.php">
                            <img src="image.png" draggable="false" width="70%">
                        </a>
                    </div>
                </div>
                <div class="form-area" style="border-top: 6px solid #C9383D; margin-top: 10px; margin-bottom: 10px;">
                    <div class="col-lg-12 text-center">
                        <h2>Open Categories Registration Form</h2>
                        <p class="text-left"></p>
                        <p class="text-left" style="margin-top: 10px;">
                            <b>
                                * Registration Closes October 1, 2023
                            </b>
                        </p>
                        <p class="text-left" style="margin-top: 0px; padding-bottom: 25px;"><b>Fields with <span>*</span> are compulsory</b></p>
                    </div>
                </div>
                <form action="" method="post">
                    <!--Email Here-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                        <div class="col-lg-12">
                            <label>Email <span>*</span></label> <br>
                            <input type="email" class="input-one" placeholder="Your email" name="email" required>
                        </div>
                    </div>
                    <!--Full Name-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>First Name<span>*</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="first_name" required>
                        </div>
                    </div>
                    <!--Email Here-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Last Name<span>*</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="last_name" required>
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
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>FIDE ID (IF ANY YES OR NO)<span> *</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="fide" required>
                        </div>
                    </div>
                    <!--Which Chess Club Do You Belong?-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                        <div class="col-lg-12">
                            <label>Which Chess Club Do You Belong?<span> *</span></label> <br>
                            <input type="text" class="input-one" name="chess_club" placeholder="Your answer" required>
                        </div>
                    </div>
                    <!--Tournament Category-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 40px 10px;">
                        <div class="col-lg-12">
                            <label>Tournament Category<span> *</span></label> <br>
                            <input type="radio" class="input-radio" value="Master (2000)" name="tournament_category" required> Masters (O2000 FIDE Rating) : **<b> ₦11,000.00 Note</b>
                            <br>
                            <input type="radio" class="input-radio" value="Open (Under 2000)" name="tournament_category" required> Open (U2000 FIDE Rating) : **<b> ₦8,000 Note</b>
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
                            <input type="submit" class="input-submit" name="submit" value="Proceed to Payment">
                        </div>
                        <div class="text-right">
                            <input type="reset" class="input-submit" value="Clear Form">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>
</html>