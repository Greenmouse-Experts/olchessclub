<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php 
    $id = $_GET['id']; 
    $sql = "DELETE FROM masters_open_2024 WHERE id = '$id'";
    $delete = mysqli_query($conn,$sql);
    if($delete){
    $_SESSION['message']=" Masters Open Category User Deleted ";
    header('Location:../admin/masters_open_2024.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }
?>