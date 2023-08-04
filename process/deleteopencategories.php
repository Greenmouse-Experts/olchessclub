<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
    
     //delete blitz
     if(isset($_POST['deleteopencategories'])){
        $open_categoriesid =  test_input($_POST["opencategoriesid"]);
        $sql = "DELETE FROM open_categories WHERE id = '$open_categoriesid'";
        $delete = mysqli_query($conn,$sql);
        if($delete){
        $_SESSION['message']=" Open Categories User Deleted ";
        header('Location:../admin/open_categories.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

?>