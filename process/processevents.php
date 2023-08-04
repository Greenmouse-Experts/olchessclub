<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
?>
<?php

    //create event from create page
    if(isset($_POST['create'])){

        $name =  test_input($_POST["name"]);
        $detail = test_input($_POST["detail"]);
        $date =  test_input($_POST["date"]);
        $time = test_input($_POST["time"]);
        $venue = test_input($_POST["venue"]);
        $attendee =  test_input($_GET["attendee"]);

        $sql= "INSERT INTO event(event_name,event_date,event_time,event_details,event_venue,event_attendee)VALUES('$name','$date','$time','$detail','$venue','$attendee')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        $_SESSION['message']=" Event was  created successfully ";
        header('Location:../admin/createeventsuc.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    }   

    //delete event
    if(isset($_POST['deleteevent'])){
        if(isset($_POST['eventid']) && !empty($_POST['eventid'])){
            
            $eventid = $_POST['eventid'];
            
            $sql= "DELETE FROM event  WHERE event_id = '$eventid'";
            $delete = mysqli_query($conn,$sql);
            if($delete){
                $_SESSION['message']= " Event successfully deleted ";
                header('Location:../admin/viewevents.php');
                die();
            }else{
                echo  $mysqli_error($conn);
                die();
            }
        }
    }
      

 //edit event
 if(isset($_GET['edit'])){

        $time =  test_input($_GET["time"]);
        $date =  test_input($_GET["date"]);
        $venue =  test_input($_GET["venue"]);
        $name =  test_input($_GET["name"]);
        $detail =  $_GET["detail"];
        $eventid =  test_input($_GET["eventid"]);
        $attendee =  test_input($_GET["attendee"]);

        $sql= "UPDATE event SET event_attendee='$attendee',event_venue='$venue',event_date='$date',event_time='$time',event_details='$detail',event_name='$name' WHERE event_id = '$eventid'";
        $update = mysqli_query($conn,$sql);
        if($update){
        $_SESSION['message']="Changes successfully made";
        header('Location:../admin/viewevents.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    }   
     