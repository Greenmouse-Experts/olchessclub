<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
     //paid junior tournament
    $mastersOpenid =  test_input($_POST["mastersOpenid"]);
    $payment =  test_input($_POST["payment"]);
    $sql = " UPDATE masters_open_2024 SET payment='$payment' WHERE id = '$mastersOpenid'";
    $update = mysqli_query($conn,$sql);
    if($update){
    $_SESSION['message']=" Masters Open Payment Status Changed";
    header('Location:../admin/masters_open_2024.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }
?>