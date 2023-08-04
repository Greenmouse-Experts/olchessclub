<?php session_start();?>
<?php
include"../includes/dbconnection.php";
include"../includes/formfunctions.php";
include"../includes/sendmail.php";
?>
<?php

    //create member from member page
    if(isset($_POST['create'])){

        $fname =  test_input($_POST["fname"]);
        $lname =  test_input($_POST["lname"]);
        $email =  test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        $pass=$password;
        

        //check db if email already exist
        $sql= " SELECT * FROM users WHERE user_email = '$email' " ;
        if($result = mysqli_query($conn,$sql)){
            if (mysqli_num_rows($result)>0){
                $_SESSION['error'] = " This Email has been used before ";
                header("Location:../admin/createmember.php");
                die();
            }       
        }
        
        //password encryption
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql= "INSERT INTO users(user_firstname,user_lastname,user_email,user_password)VALUES('$fname','$lname','$email','$password')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        //send details to  email of the member created
        emailMembershipCreation($email,$pass);
        $_SESSION['message']=" Member created ";
        header('Location:../admin/createmembersuc.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }

    }   


    //edit member from upgrade page
    if(isset($_GET['edit'])){
        $userid =  test_input($_GET["userid"]);
        $fname = test_input($_GET["fname"]);
        $sname = test_input($_GET["sname"]);
        $nickname = test_input($_GET["nickname"]);
        $phone = test_input($_GET["phone"]);
        $email = test_input($_GET["email"]);
        $state = test_input($_GET["state"]);
        $lga = test_input($_GET["lga"]);
        $street = test_input($_GET["street"]);
        $date_of_birth = test_input($_GET["date_of_birth"]);
        $sex = test_input($_GET["sex"]);
        $age = test_input($_GET["age"]);
        $chess_level = test_input($_GET["chess_level"]);
        // $code = test_input($_GET["code"]);
        $fide_id = test_input($_GET["fide_id"]);
        $title = test_input($_GET["title"]);
        $membership_type = test_input($_GET["membership_type"]);
        $lichess_id = test_input($_GET["lichess_id"]);
        $security_question = test_input($_GET["security_question"]);
        $security_answer = test_input($_GET["security_answer"]);
        $status =  test_input($_GET["status"]);

        $sql= "UPDATE users SET user_firstname='$fname', 
        user_lastname='$sname', username='$nickname', 
        -- user_code='$code', 
        user_phone='$phone', user_email='$email', user_gender='$sex', 
        user_status='$status', fide_number='$fide_id', fide_title='$title', user_bday='$date_of_birth', 
        user_age='$age', user_chesslevel='$chess_level', user_state='$state', user_street='$street', 
        user_lga='$lga', user_membershiptype='$membership_type', user_lichessid='$lichess_id', 
        user_securityquestion='$security_question', user_securityanswer='$security_answer' WHERE user_id = '$userid'";
        $update = mysqli_query($conn,$sql);
        if($update){
        $_SESSION['message']="Changes successfully made";
        header('Location:../admin/membersuc.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    }   


    //disable member from upgrade page
    if(isset($_GET['disable'])){
        $userid =  test_input($_GET["userid"]);
        $sql= "UPDATE users SET user_disabled = 'yes' WHERE user_id = '$userid'";
        $update = mysqli_query($conn,$sql);
        if($update){
        $_SESSION['message']=" User successfully disabled ";
        header('Location:../admin/membersuc.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    }   


     //disable member from upgrade page
     if(isset($_GET['enable'])){
        $userid =  test_input($_GET["userid"]);
        $sql= "UPDATE users SET user_disabled = NULL  WHERE user_id = '$userid'";
        $update = mysqli_query($conn,$sql);
        if($update){
        $_SESSION['message']=" User successfully enabled ";
        header('Location:../admin/membersuc.php');
        die();
        }else{
        echo  'failed'. mysqli_error($conn);
        die();
        }
    } 

//change member password

if(isset($_POST['memberpass'])){
    
     $userid =  test_input($_POST["userid"]);
    
     if(empty($_POST["password"])) {
        $_SESSION['error'] = " Password is required ";
        header("Location:../admin/upgrade.php?userid=".$userid."&formedit=Edit");
        die();
      } else {
        $password = test_input($_POST["password"]);
      }
    
     if(empty($_POST["cpassword"])) {
        $_SESSION['error'] = " Password needs to be confirmed ";
        header("Location:../admin/upgrade.php?userid=".$userid."&formedit=Edit");
        die();
      } else {
        $cpassword = test_input($_POST["cpassword"]);
      }
    //compare new password and reentered passowrd for matching
    if($_POST["password"] == $_POST["cpassword"]){
        $password = $cpassword;
    } else {
        $_SESSION['error'] = " New Password doesn't match ";
        header("Location:../admin/upgrade.php?userid=".$userid."&formedit=Edit");
        die();
    }   

    //hash new password
  $password = password_hash($password,PASSWORD_DEFAULT);

    $sql= "UPDATE users SET user_password = '$password' WHERE user_id = '$userid'";
    $update = mysqli_query($conn,$sql);
    if($update){
    $_SESSION['message']="Password Successfully Changed";
    header('Location:../admin/membersuc.php');
    die();
    }else{
    echo  'failed'. mysqli_error($conn);
    die();
    }
}   