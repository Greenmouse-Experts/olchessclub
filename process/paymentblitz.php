<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
     //paid junior tournament
    $blitzid =  test_input($_POST["blitzid"]);
    $payment =  test_input($_POST["payment"]);
    $sql = " UPDATE blitz_reg SET payment='$payment' WHERE id = '$blitzid'";
    $update = mysqli_query($conn,$sql);
    if($update){
    $_SESSION['message']=" Blitz User Payment Status Changed";
    header('Location:../admin/blitz.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }
?>