<?php session_start();?>
<?php
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $registration_id = $_POST['registration_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $school_name = $_POST['school_name'];
    $fide_id = $_POST['fide_id'];
    $tournament_category = $_POST['tournament_category'];
    $I_agree = $_POST['I_agree'];
    $p_g_name = $_POST['p_g_name'];
    $p_g_phone_number = $_POST['p_g_phone_number'];
    $p_g_email = $_POST['p_g_email'];
    $consent_agreement = $_POST['consent_agreement'];
    $payment = $_POST['payment'];
    $ref_id = $_POST['reference'];
    $paid_at = $_POST['paid_at'];

    $last = "SELECT * FROM junior_tournament_2023 ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $last);

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result)) {
            $id = $row["id"];
        }
        $reg_id = $registration_id + $id;
        $sql= "INSERT INTO junior_tournament_2023 (registration_id, first_name, last_name, gender, date_of_birth, school_name, fide_id, tournament_category, I_agree, p_g_name, p_g_phone_number, p_g_email, consent_agreement, payment, ref_id, paid_at)
        VALUES('$reg_id', '$first_name', '$last_name', '$gender', '$date_of_birth', '$school_name', '$fide_id', '$tournament_category', '$I_agree', '$p_g_name', '$p_g_phone_number', '$p_g_email', '$consent_agreement', '$payment', '$ref_id', '$paid_at')";
        $insert = mysqli_query($conn,$sql);
    } else {
        $sql= "INSERT INTO junior_tournament_2023 (registration_id, first_name, last_name, gender, date_of_birth, school_name, fide_id, tournament_category, I_agree, p_g_name, p_g_phone_number, p_g_email, consent_agreement, payment, ref_id, paid_at)
        VALUES('$registration_id', '$first_name', '$last_name', '$gender', '$date_of_birth', '$school_name', '$fide_id', '$tournament_category', '$I_agree', '$p_g_name', '$p_g_phone_number', '$p_g_email', '$consent_agreement', '$payment', '$ref_id', '$paid_at')";
        $insert = mysqli_query($conn,$sql);
    }
    
    if($insert){
        echo json_encode(['status' => 'success']);
        exit();
    } else {
        echo json_encode(['status' => 'failed'. mysqli_error($conn)]);
        die();
    }
}
