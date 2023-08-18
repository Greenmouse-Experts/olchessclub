<?php session_start();?>
<?php
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $registration_id = $_POST['registration_id'];
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
    $payment = $_POST['payment'];
    $ref_id = $_POST['reference'];
    $paid_at = $_POST['paid_at'];

    $last = "SELECT * FROM blitz_category_2023 ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $last);

    require_once ('../PHPMailer-master/src/PHPMailer.php');
    require_once ('../PHPMailer-master/src/SMTP.php');
    require_once ('../PHPMailer-master/src/Exception.php');

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.dreamhost.com";
    $mail->SMTPAuth = true;
    $mail->Username = "support@olchessclub.com";
    $mail->Password = 'olakunle1!';                       
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result)) {
            $id = $row["id"];
        }
        $reg_id = $registration_id + $id;
        $sql= "INSERT INTO blitz_category_2023 (registration_id, email, first_name, last_name, gender, date_of_birth, telephone_number, fide, chess_club, tournament_category, I_agree, payment, ref_id, paid_at)
        VALUES('$reg_id', '$email', '$first_name', '$last_name', '$gender', '$date_of_birth', '$telephone_number', '$fide', '$chess_club', '$tournament_category', '$I_agree', '$payment', '$ref_id', '$paid_at')";
        $insert = mysqli_query($conn,$sql);

        $numberWithZeros = str_pad($reg_id, 4, '0', STR_PAD_LEFT);
    } else {
        $sql= "INSERT INTO blitz_category_2023 (registration_id, email, first_name, last_name, gender, date_of_birth, telephone_number, fide, chess_club, tournament_category, I_agree, payment, ref_id, paid_at)
        VALUES('$registration_id', '$email', '$first_name', '$last_name', '$gender', '$date_of_birth', '$telephone_number', '$fide', '$chess_club', '$tournament_category', '$I_agree', '$payment', '$ref_id', '$paid_at')";
        $insert = mysqli_query($conn,$sql);

        $numberWithZeros = str_pad($registration_id, 4, '0', STR_PAD_LEFT);
    }

    //send from
    $mail->setFrom('support@olchessclub.com', 'OlchessClub');
    //recipient
    $mail->addAddress("{$_POST['email']}");

    //content
    $mail->Subject = 'Orchid-Lekki Chess Club (OLCC)';
    $mail->isHTML(true);
    $mail->Body = <<<EOT
    <!doctype html>
    <html>
    
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Orchid-Lekki Chess Club (OLCC)</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
    
        /*All the styling goes here*/
    
        img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
        }
    
        body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        }
    
        table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
        }
    
        table td {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
        }
    
        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */
    
        .body {
        background-color: #f6f6f6;
        width: 100%;
        }
    
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px;
        }
    
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px;
        }
    
        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%;
        }
    
        .wrapper {
        box-sizing: border-box;
        padding: 20px;
        }
    
        .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
        }
    
        .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%;
        }
    
        .footer td,
        .footer p,
        .footer span,
        .footer a {
        color: #999999;
        font-size: 12px;
        text-align: center;
        }
    
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px;
        }
    
        h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize;
        }
    
        p,
        ul,
        ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px;
        }
    
        p li,
        ul li,
        ol li {
        list-style-position: inside;
        margin-left: 5px;
        }
    
        a {
        color: #3498db;
        text-decoration: underline;
        }
    
        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
        box-sizing: border-box;
        width: 100%;
        }
    
        .btn>tbody>tr>td {
        padding-bottom: 15px;
        }
    
        .btn table {
        width: auto;
        }
    
        .btn table td {
        background-color: #ffffff;
        border-radius: 5px;
        text-align: center;
        }
    
        .btn a {
        background-color: #ffffff;
        border: solid 1px #551BA6;
        border-radius: 5px;
        box-sizing: border-box;
        color: #3498db;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        padding: 12px 25px;
        text-decoration: none;
        text-transform: capitalize;
        }
    
        .btn-primary table td {
        background-color: #551BA6;
        }
    
        .btn-primary a {
        background-color: #551BA6;
        border-color: #3498db;
        color: #ffffff;
        }
    
        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
        margin-bottom: 0;
        }
    
        .first {
        margin-top: 0;
        }
    
        .align-center {
        text-align: center;
        }
    
        .align-right {
        text-align: right;
        }
    
        .align-left {
        text-align: left;
        }
    
        .clear {
        clear: both;
        }
    
        .mt0 {
        margin-top: 0;
        }
    
        .mb0 {
        margin-bottom: 0;
        }
    
        .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
        }
    
        .powered-by a {
        text-decoration: none;
        }
    
        hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0;
        }
    
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
        table.body h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }
    
        table.body p,
        table.body ul,
        table.body ol,
        table.body td,
        table.body span,
        table.body a {
            font-size: 16px !important;
        }
    
        table.body .wrapper,
        table.body .article {
            padding: 10px !important;
        }
    
        table.body .content {
            padding: 0 !important;
        }
    
        table.body .container {
            padding: 0 !important;
            width: 100% !important;
        }
    
        table.body .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }
    
        table.body .btn table {
            width: 100% !important;
        }
    
        table.body .btn a {
            width: 100% !important;
        }
    
        table.body .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
        }
        }
    
        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
        .ExternalClass {
            width: 100%;
        }
    
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }
    
        .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }
    
        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }
    
        .btn-primary table td:hover {
            background-color: #34495e !important;
        }
    
        .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
        }
        }
    </style>
    </head>
    
    <body>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
            <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">
        
                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">
        
                    <!-- LOGO -->
                    <tr>
                    <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td align="center" valign="top" style="padding: 40px 30px 20px 30px; font-size: 20px;">
                            <img src="https://olchessclub.com/image.png" alt="Orchid-Lekki Chess Club (OLCC)" width="150px"></a>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                    <td class="wrapper">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                            <p>Dear {$_POST['first_name']} {$_POST['last_name']},</p>
                            <p>This is a confirmation email for participation in the NCC 2023 - Blitz Category. </p>
                            <p>Your registration ID is Blitz-{$numberWithZeros} and your payment confirmation ID is {$_POST['reference']}</p>
                            <p>Please ensure you get to the venue no later than 30 mins to the start time.</p>
                            </td>
                        </tr>
                        </table>
                        <p style="margin-top: 1.5rem">For further information, pls visit our website on <a href="https://olchessclub.com/ncc23.php" target="_blank">www.olchessclub.com/NCC2023.</a></p>
                        <p>We look forward to your participation.</p>
                        <p>Best regards,<br>
                        Orchid-Lekki Chess Club (OLCC)<br>
                        The NCC Organising Committee</p>
                    </td>
                    </tr>
        
                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->
        
                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-block powered-by">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © <a href="https://olchessclub.com">Orchid-Lekki Chess Club (OLCC)</a>.
                        </td>
                    </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
        
                </div>
            </td>
            <td>&nbsp;</td>
            </tr>
        </table>
    </body>
    
    </html>
    EOT;

    $mail->send();

    if($insert){
        echo json_encode(['status' => 'success']);
        exit();
    } else {
        echo json_encode(['status' => 'failed'. mysqli_error($conn)]);
        die();
    }
}
