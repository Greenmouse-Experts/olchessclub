<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
    
     //delete blitz
     if(isset($_POST['deleteblitz'])){
        $blitzid =  test_input($_POST["blitzid"]);
        $sql = "DELETE FROM blitz_reg WHERE id = '$blitzid'";
        $delete = mysqli_query($conn,$sql);
        if($delete){
        $_SESSION['message']=" Blitz User Deleted ";
        header('Location:../admin/blitz.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

?>