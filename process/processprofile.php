<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/formfunctions.php";?>
<?php

$id = $_SESSION['logged'];

//collect data from form on profile.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $fname = test_input($_POST["fname"]);
      $sname = test_input($_POST["sname"]);
      $nickname = test_input($_POST["nickname"]);
      $phone = test_input($_POST["phone"]);
      $state = test_input($_POST["state"]);
      $lga = test_input($_POST["lga"]);
      $street = test_input($_POST["street"]);
      $date_of_birth = test_input($_POST["date_of_birth"]);
      $sex = test_input($_POST["sex"]);
      $age = test_input($_POST["age"]);
      $chess_level = test_input($_POST["chess_level"]);
    //   $code = test_input($_POST["code"]);
      $fide_id = test_input($_POST["fide_id"]);
      $title = test_input($_POST["title"]);
      $membership_type = test_input($_POST["membership_type"]);
      $lichess_id = test_input($_POST["lichess_id"]);
      $security_question = test_input($_POST["security_question"]);
      $security_answer = test_input($_POST["security_answer"]);
  }
  
  $sql = " UPDATE users SET user_firstname = '$fname', user_lastname = '$sname', 
  username = '$nickname', user_phone = '$phone',
  user_state = '$state', user_lga = '$lga', user_street = '$street', user_bday = '$date_of_birth', 
  user_age = '$age', user_gender = '$sex', 
--   user_code = '$code',
  user_chesslevel = '$chess_level', fide_number='$fide_id', user_type='$title', user_membershiptype='$membership_type',
  user_lichessid='$lichess_id', user_securityquestion='$security_question', user_securityanswer='$security_answer' WHERE user_id = '$id' ";

      if($result = mysqli_query($conn,$sql)){
        // reset data  session        
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $sname;
            $_SESSION['username'] = $nickname;
            $_SESSION['phone'] = $phone;
            $_SESSION['state'] = $state;
            $_SESSION['lga'] = $lga;
            $_SESSION['street'] = $street;
            $_SESSION['bday'] = $date_of_birth;
            $_SESSION['gender'] = $sex;
            $_SESSION['chesslevel'] = $chess_level;
            // $_SESSION['code'] = $code;
            $_SESSION['fideno'] = $fide_id;
            $_SESSION['fidetitle'] = $title;
            $_SESSION['membershipType'] = $membership_type;
            $_SESSION['lichessId'] = $lichess_id;
            $_SESSION['securityQuestion'] = $security_question;
            $_SESSION['securityAnswer'] = $security_answer;
            $_SESSION['message'] = " Profile successfully updated";
            header("Location:../member/index.php");
            die();

        }else{
                
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        
        }


       