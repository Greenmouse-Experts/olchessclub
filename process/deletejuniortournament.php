<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php
    
     //delete junior tournament
     if(isset($_POST['deletejuniortournament'])){
        $junior_tournamentid =  test_input($_POST["juniortournamentid"]);
        $sql = "DELETE FROM junior_tournament_reg WHERE id = '$junior_tournamentid'";
        $delete = mysqli_query($conn,$sql);
        if($delete){
        $_SESSION['message']=" Junior Tournament User Deleted ";
        header('Location:../admin/junior_tournament.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

?>