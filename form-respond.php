<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="Chess Club Form">
    <link rel="icon" href="assetss/images/logo (2).png">
    <title>Junior Tournament</title>
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
    <?php 
    session_start();
    // Set your Paystack public key here
    $public_key = 'pk_live_3d2d203e69d23399e23ea211098081d8ac1bb8eb';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['complete'])) {
        if($_POST['tournament_category'] == 'Junior (Under 20)') 
        {
            $amount_payable = 6000;
        } 
        elseif($_POST['tournament_category'] == 'Junior (Under 14)') 
        {
            $amount_payable = 6000;
        } 
        else 
        {
            $amount_payable = 6000;
        }

        $dateTime = new DateTime();
        $registration_id =  1;
        $amount = $amount_payable * 100; // Paystack requires the amount in kobo (1 Naira = 100 kobo)
        $first_name = $_GET['first_name']; 
        $last_name = $_GET['last_name']; 
        $gender = $_GET['gender']; 
        $date_of_birth = $_GET['date_of_birth']; 
        $school_name = $_GET['school_name']; 
        $fide_id = $_GET['fide_id']; 
        $tournament_category = $_GET['tournament_category']; 
        $I_agree = $_GET['I_agree']; 
        $p_g_name = $_POST['p_g_name']; 
        $p_g_phone_number = $_POST['p_g_phone_number']; 
        $p_g_email = $_POST['p_g_email']; 
        $consent_agreement = $_POST['consent_agreement']; 
        $payment = 'Paid';
        $paid_at = $dateTime->format('F j, Y g:i:s A');
        $reference = "JT_" . uniqid(); // Generate a unique payment reference

        // Save the payment details to your database or session for verification after payment

        // Redirect to the payment page
        echo '<script src="https://js.paystack.co/v1/inline.js"></script>';
        echo '<script>
                var handler = PaystackPop.setup({
                    key: "' . $public_key . '",
                    email: "' . $p_g_email . '",
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
                        xhr.open("POST", "process/junior_tournament_2023.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                var result = JSON.parse(xhr.responseText);
                                if (result.status === "success") {
                                    // Redirect the user to a success page
                                    window.location.href = "success/junior_form_success.php";
                                } else {
                                    alert("Payment verification failed. Please try again later.");
                                }
                            }
                        };
                        xhr.send("reference=" + encodeURIComponent(response.reference) + 
                        "&registration_id=" + "' . $registration_id . '" + 
                        "&first_name=" + "' . $first_name . '" + 
                        "&last_name=" +  "' . $last_name . '" + 
                        "&gender=" +  "' . $gender . '" + 
                        "&date_of_birth=" +  "' . $date_of_birth . '" + 
                        "&school_name=" +  "' . $school_name . '" + 
                        "&fide_id=" +  "' . $fide_id . '" + 
                        "&tournament_category=" +  "' . $tournament_category . '" + 
                        "&I_agree=" +  "' . $I_agree . '" + 
                        "&p_g_name=" +  "' . $p_g_name . '" + 
                        "&p_g_phone_number=" +  "' . $p_g_phone_number . '" + 
                        "&p_g_email=" +  "' . $p_g_email . '" + 
                        "&consent_agreement=" +  "' . $consent_agreement . '" + 
                        "&payment=" +  "' . $payment . '" + 
                        "&paid_at=" +  "' . $paid_at . '");
                    },
                    onClose: function() {
                        alert("Payment window closed.");
                    }
                });
                handler.openIframe();
            </script>';
    }
    ?>
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
                <form action="" method="post">
                    <!--Parent/Guardian Details-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Parent/Guardian Name
                                <span>*</span></label> <br>
                            <input type="text" class="input-one" placeholder="Your answer" name="p_g_name" required>
                        </div>
                    </div>
                    <!--Parent/Guardian's Phone Number-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Parent/Guardian's Phone Number
                                <span>*</span></label> <br>
                            <input type="number" class="input-one" placeholder="Your answer" name="p_g_phone_number" required>
                        </div>
                    </div>
                    <!--Parent/ Guardian Email Address-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>Parent/ Guardian Email Address
                                <span>*</span></label> <br>
                            <input type="email" class="input-one" placeholder="Your answer" name="p_g_email" required>
                        </div>
                    </div>
                    <!--Gender-->
                    <!--I agree-->
                    <div class="form-area" style="margin-top: 10px; margin-bottom: 10px; padding: 30px 10px 30px 20px;">
                        <div class="col-lg-12">
                            <label>I HEREBY GIVE MY CONSENT TO MY CHILD/WARD TO PARTICIPATE IN THE TOURNAMENT.
                                <span>*</span></label> <br>
                            <input type="checkbox" class="input-check" name="consent_agreement" required> I Agree
                        </div>
                    </div>
                    <!--Submit & Reset-->
                    <div class="row py-3">
                        <div class="col-lg-6">
                            <div style="margin-right: 20px;">
                                <button type="submit" name="complete" class="input-submit">
                                Proceed to Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-12">
                    <div style="margin-right: 20px;">
                        <a href="juniorform.php">
                            <button class="input-submit"  style="float: right;">
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