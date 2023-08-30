<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php 
    $id = $_GET['id']; 
    $sql = "DELETE FROM junior_tournament_2023 WHERE id = '$id'";
    $delete = mysqli_query($conn,$sql);
    if($delete){
    $_SESSION['message']=" Junior Tournament User Deleted ";
    header('Location:../admin/junior_tournament_2023.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }
?>