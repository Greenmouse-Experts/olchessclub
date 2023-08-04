<?php
session_start();
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
include "../includes/sendmail.php";
date_default_timezone_set('Africa/Lagos');

use PHPMailer\PHPMailer\PHPMailer;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST['sname'])){
        $_SESSION['error'] = " Surname is required ";
        header("Location:../register.php");
        die();
    }else{
     $sname = test_input($_POST['sname']);
    }

    if(empty($_POST['fname'])){
        $_SESSION['error'] = " First name is required ";
        header("Location:../register.php");
        die();
    }else{
     $fname = test_input($_POST['fname']);
    }

    // if(empty($_POST['nickname'])){
    //     $_SESSION['error'] = " Last name is required ";
    //     header("Location:../register.php");
    //     die();
    // }else{
     $nickname = test_input($_POST['nickname']);
    // }

    if(empty($_POST['sex'])){
        $_SESSION['error'] = " Sex is required ";
        header("Location:../register.php");
        die();
    }else{
     $sex = test_input($_POST['sex']);
    }

    if(empty($_POST['title'])){
        $_SESSION['error'] = " Title is required ";
        header("Location:../register.php");
        die();
    }else{
     $title = test_input($_POST['title']);
    }

    // if(empty($_POST['fide_id'])){
    //     $_SESSION['error'] = " Fide ID is required ";s
    //     header("Location:../register.php");
    //     die();
    // }else{
     $fide_id = test_input($_POST['fide_id']);
    // }

    if(empty($_POST['email'])){
        $_SESSION['error'] = " Email is required ";
        header("Location:../register.php");
        die();
    }else{
        $email = test_input($_POST['email']);
    }

    if(empty($_POST['password'])){
        $_SESSION['error'] = " Password is required ";
        header("Location:../register.php");
        die();
     }
    if(empty($_POST['cpassword'])){
        $_SESSION['error'] = " Password needs to be confirmed ";
        header("Location:../register.php");
        die();
    }
 
    if($_POST["cpassword"] == $_POST["password"]){
        $password = test_input($_POST['password']);
        } else {
        $_SESSION['error'] = " Password doesnt match ";
        header("Location:../register.php");
        die();
    }     

    if(empty($_POST['date_of_birth'])){
        $_SESSION['error'] = " Date of Birth is required ";
        header("Location:../register.php");
        die();
    }else{
        $date_of_birth = test_input($_POST['date_of_birth']);
    }

    if(empty($_POST['phone_number'])){
        $_SESSION['error'] = " Phone Number is required ";
        header("Location:../register.php");
        die();
    }else{
        $phoneNumber = test_input($_POST['phone_number']);
    }
 
    if(empty($_POST['chess_level'])){
        $_SESSION['error'] = " Chess level is required ";
        header("Location:../register.php");
        die();
    }else{
        $chess_level = test_input($_POST['chess_level']);
    }

    if(empty($_POST['membership_type'])){
        $_SESSION['error'] = " Membership Type is required ";
        header("Location:../register.php");
        die();
    }else{
        $membership_type = test_input($_POST['membership_type']);
    }

    // if(empty($_POST['lichess_id'])){
    //     $_SESSION['error'] = " Lichess ID is required ";
    //     header("Location:../register.php");
    //     die();
    // }else{
        $lichess_id = test_input($_POST['lichess_id']);
        $reg_date = date('Y-m-d H:i:s');
    // }

    if(empty($_POST['security_question'])){
        $_SESSION['error'] = " Security Question is required ";
        header("Location:../register.php");
        die();
    }else{
        $security_question = test_input($_POST['security_question']);
    }
    
    if(empty($_POST['security_answer'])){
        $_SESSION['error'] = " Security Answer is required ";
        header("Location:../register.php");
        die();
    }else{
        $security_answer = test_input($_POST['security_answer']);
    }
}
  
input_length($fname);
check_for_number_in_string($fname);
check_for_number_in_string($sname);
validity_of_mail();


//check db if email already exist
$sql= " SELECT * FROM users WHERE user_email = '$email' " ;
if($result = mysqli_query($conn,$sql)){
if (mysqli_num_rows($result)>0){
    $_SESSION['error'] = " This Email has been used before ";
    header("Location:../register.php");
    die();
  }       
}

//password hashing
$password = password_hash($password,PASSWORD_DEFAULT);


$date=date('Y-m-d');

$user_code = "OLCC-";

require_once ('../PHPMailer/PHPMailer.php');
require_once ('../PHPMailer/SMTP.php');
require_once ('../PHPMailer/Exception.php');

$mail = new PHPMailer();

//smtp settings
$mail->isSMTP();
$mail->Host = "smtp.dreamhost.com";
$mail->SMTPAuth = true;
$mail->Username = "support@olchessclub.com";
$mail->Password = 'olakunle1!';                       
$mail->SMTPSecure = 'ssl';                           
$mail->Port = 465;      

//email settings
$mail->isHTML(true);

//send from
$mail->setFrom('support@olchessclub.com', 'OlchessClub');

//recipient
$mail->addAddress("{$_POST['email']}");

//content
$mail->Subject = 'Comfirmation Mail';
$mail->Body = <<<EOT

Thank you, {$_POST['fname']} {$_POST['sname']}, for completing your online registration with Orchid-Lekki. 
<br>
<br>
Your membership details are as follows:
<br>
<br>
Membership Type:	{$_POST['membership_type']}
<br>
Title:			{$_POST['title']}
<br>
Name:			{$_POST['sname']}, {$_POST['fname']}
<br>
FIDE ID:			{$_POST['fide_id']}
<br>
Chess Level:		{$_POST['chess_level']}
<br>
<br>
Please note that your account is currently inactive until membership payment is confirmed.
<br>
Kindly make payment to our account with details below:
<br>
<br>
Bank:		    FCMB
<br>
Account Name:	ORCHID-LEKKI CHESS CLUB 
<br>
Account No.:	6930613018
<br>
<br>
After making payment, please send evidence via email to info@olchessclub.com or via WhatsApp/SMS to +234 809 660 2599. Account will be activated upon confirmation of payment.
<br>
We look forward to welcoming you to our chess family and enjoying this life-long chess journey with you.
<br>
<br>
Welcome to OLCC!

EOT;

if($mail->send()){
    $status = "Success";
    $response = "Email is sent!";
}else{
    $status = "Failed";
    $response = "Something is wrong: <br>" . $mail->ErrorInfo;
}

$olchessclubmail = new PHPMailer();

//smtp settings
$olchessclubmail->isSMTP();
$olchessclubmail->Host = "smtp.dreamhost.com";
$olchessclubmail->SMTPAuth = true;
$olchessclubmail->Username = "support@olchessclub.com";
$olchessclubmail->Password = 'olakunle1!';                       
$olchessclubmail->SMTPSecure = 'ssl';                           
$olchessclubmail->Port = 465;      

//email settings
$olchessclubmail->isHTML(true);

//send from
$olchessclubmail->setFrom('support@olchessclub.com', 'OlchessClub');

//recipient
$olchessclubmail->addAddress("info@olchessclub.com");

//content
$olchessclubmail->Subject = 'New Member';
$olchessclubmail->Body = <<<EOT
A Member just registered, below is the member information:
<br>
<br>
Membership Type:	{$_POST['membership_type']}
<br>
Title:			{$_POST['title']}
<br>
Name:			{$_POST['sname']}, {$_POST['fname']}
<br>
Sex:            {$_POST['sex']}
<br>
Email:            {$_POST['email']}
<br>
Date of Birth:            {$_POST['date_of_birth']}
<br>
FIDE ID:			{$_POST['fide_id']}
<br>
Chess Level:		{$_POST['chess_level']}
<br>
<br>
EOT;

if($olchessclubmail->send()){
    $status = "Success";
    $response = "Email is sent!";
}else{
    $status = "Failed";
    $response = "Something is wrong: <br>" . $olchessclubmail->ErrorInfo;
}

//inserting user data to db
$sql = " INSERT INTO users (user_code,user_lastname,user_firstname,username,user_phone,user_gender,fide_title,fide_number,user_email,user_password,user_bday,user_chesslevel,reg_date,user_membershiptype, user_lichessid, user_securityquestion, user_securityanswer) 
        VALUES ('$user_code','$sname','$fname','$nickname','$phoneNumber','$sex','$title','$fide_id','$email','$password','$date_of_birth','$chess_level','$reg_date','$membership_type','$lichess_id','$security_question','$security_answer') ";
$insert = mysqli_query($conn,$sql);
if($insert){
    emailMembershipReg($email,$sname,$fname);
    $_SESSION['message'] = " Registration Successful";
    header("Location:../member/login.php");
}else{
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
}