<?php session_start();?>
<?php
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
?>
<?php
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

    $last = "SELECT * FROM open_section_2023 ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $last);

    if (mysqli_num_rows($result) > 0)
    {
            while($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
            }
            $reg_id = $registration_id + $id;
        $sql= "INSERT INTO open_section_2023 (registration_id, email, first_name, last_name, gender, date_of_birth, telephone_number, fide, chess_club, tournament_category, I_agree, payment, ref_id, paid_at)
        VALUES('$reg_id', '$email', '$first_name', '$last_name', '$gender', '$date_of_birth', '$telephone_number', '$fide', '$chess_club', '$tournament_category', '$I_agree', '$payment', '$ref_id', '$paid_at')";
        $insert = mysqli_query($conn,$sql);
    } else {
        $sql= "INSERT INTO open_section_2023 (registration_id, email, first_name, last_name, gender, date_of_birth, telephone_number, fide, chess_club, tournament_category, I_agree, payment, ref_id, paid_at)
        VALUES('$registration_id', '$email', '$first_name', '$last_name', '$gender', '$date_of_birth', '$telephone_number', '$fide', '$chess_club', '$tournament_category', '$I_agree', '$payment', '$ref_id', '$paid_at')";
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
