<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
     //paid junior tournament
    $open_categoriesid =  test_input($_POST["opencategoriesid"]);
    $payment =  test_input($_POST["payment"]);
    $sql = " UPDATE open_categories SET payment='$payment' WHERE id = '$open_categoriesid'";
    $update = mysqli_query($conn,$sql);
    if($update){
    $_SESSION['message']=" Open Categories User Payment Status Changed";
    header('Location:../admin/open_categories.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }

?>