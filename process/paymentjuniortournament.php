<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
     //paid junior tournament
    $junior_tournamentid =  test_input($_POST["juniortournamentid"]);
    $payment =  test_input($_POST["payment"]);
    $sql = " UPDATE junior_tournament_reg SET payment='$payment' WHERE id = '$junior_tournamentid'";
    $update = mysqli_query($conn,$sql);
    if($update){
    $_SESSION['message']=" Junior Tournament User Payment Status Changed";
    header('Location:../admin/junior_tournament.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }

?>