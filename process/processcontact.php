<?php session_start();?>
<?php include "../includes/formfunctions.php";?>
<?php include "../includes/sendmail.php";?>
<?php

//check for errors in the email from form on forgot.php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
      
    if(empty($_POST["name"])) {
        $_SESSION['error'] = " Name is required";
        header("Location:../contact-us.php");
        die();
      } else {
        $name =  test_input($_POST["name"]);
      }
      
      if(empty($_POST["email"])) {
        $_SESSION['error'] = " Email is required";
        header("Location:../contact-us.php");
        die();
      } else {
        $email =  test_input($_POST["email"]);
      }

      $phone =  test_input($_POST["number"]);
      
      if(empty($_POST["message"])) {
        $_SESSION['error'] = " Message is required";
        header("Location:../contact-us.php");
        die();
      } else {
        $message =  test_input($_POST["message"]);
      }
      
      if(empty($_POST["subject"])) {
        $_SESSION['error'] = " Subject is required";
        header("Location:../contact-us.php");
        die();
      } else {
        $subject =  test_input($_POST["subject"]);
      }
    
  }

 //send mail

sendContactEmail($email,$name,$phone,$message,$subject);

