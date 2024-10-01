<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php 
    $id = $_GET['id']; 
    $sql = "DELETE FROM jonathan_odega_memorial_blitz_tournament_2024 WHERE id = '$id'";
    $delete = mysqli_query($conn,$sql);
    if($delete){
    $_SESSION['message']=" Jonathan Odega Memorial Blitz Tournament Category User Deleted ";
    header('Location:../admin/jonathan_odega_memorial_blitz_tournament_2024.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }
?>