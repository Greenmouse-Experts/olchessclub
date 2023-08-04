<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php

    //create
    if(isset($_POST['Submit'])) {
        $first_name =  $_SESSION["first_name"];
        $last_name = $_SESSION["last_name"];
        $gender =  $_SESSION["gender"];
        $email = $_SESSION["email"];
        $date_of_birth = $_SESSION["date_of_birth"];
        $name_of_school = $_SESSION["name_of_school"];
        $fide_id =  $_SESSION["fide_id"];
        $pg_full_name = $_POST["pg_full_name"];
        $pg_phone_number = $_POST["pg_phone_number"];
        $pg_email =  $_POST["pg_email"];
        $I_agree = $_POST["I_agree"];
        
        $sql = "SELECT * FROM jct WHERE email='$email'";
        $res = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($res) > 0) {
            ?>
            <script>
            alert("Sorry... Email already taken");
                document.location='../jct/form.php'
            </script>
            <?php
        } else {
            $SECRET_KEY = 'sk_test_53668873c7cbb5572b4156b133ab8ee8030e7f59';

            $url = "https://api.paystack.co/transaction/initialize";

            $fields = [
                'email' => $_SESSION["email"],
                'amount' => 5000 * 100, //the amount in kobo. This value is actually NGN 300
                // url to go to after payment
                'callback_url' => 'https://localhost/chessclub/jct/callback.php',
                'metadata' => [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'gender' => $gender,
                    'date_of_birth' => $date_of_birth,
                    'name_of_school' => $name_of_school,
                    'fide_id' => $fide_id,
                    'pg_full_name' => $pg_full_name,
                    'pg_phone_number' => $pg_phone_number,
                    'pg_email' => $pg_email,
                    'I_agree' => $I_agree
                ]
            ];

            $fields_string = http_build_query($fields);
            //open connection
            $ch = curl_init();

            //set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ));

            //So that curl_exec returns the contents of the cURL; rather than echoing it
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

            //execute post
            $paystack_result = curl_exec($ch);

            $result = json_decode($paystack_result);

            //  return $result;
            $authorization_url = $result->data->authorization_url;
            $paystack_status = $result->status;

            // return dd($result->status);

            if ($paystack_status == true) {
                header('Location: ' . $authorization_url);
            } else {
                
            }
            die();
        }
    }   

    