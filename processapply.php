<?php session_start();?>
<?php include "includes/dbconnection.php"?>
<?php include "includes/formfunctions.php"?>
<?php


if (isset($_POST['apply'])) {
  
   $jobid = $_POST["jobid"];
    
  if(empty($_POST["name"])) {
      $_SESSION['error']=" Name is required";
      header("Location:apply.php?job=$jobid");
      die();
    } else {
      $name =  test_input($_POST["name"]);
    }
    
    if(empty($_POST["email"])) {
      $_SESSION['error']=" Email is required";
      header("Location:apply.php?job=$jobid");
      die();
    } else {
      $email = test_input($_POST["email"]);
    }

    if(empty($_POST["phone"])) {
        $_SESSION['error']=" Phone is required";
        header("Location:apply.php?job=$jobid");
        die();
      } else {
        $phone = test_input($_POST["phone"]);
      }
    
      if(empty($_FILES["attachment"])) {
        $_SESSION['error']=" CV is required";
        header("Location:apply.php?job=$jobid");
        die();
      } else {
        $info = pathinfo($_FILES['attachment']['name']);
        $ext = $info['extension'];
        $cv = $name.".".$ext; 
        $target = 'uploads/'.$cv;
        move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);
      }
     
  }


    $insert = " INSERT INTO applicants(job_id,applicant_name,applicant_email,applicant_phone,applicant_cv) VALUES ('$jobid','$name','$email','$phone','$target') ";
    $result = mysqli_query($conn,$insert);
    if($result){
    $_SESSION['message'] = " Application was successful ";
    header("Location:applysuc.php");
    }else{
        echo mysqli_error($conn);
    }
?>