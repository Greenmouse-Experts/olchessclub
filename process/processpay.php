<?php session_start();?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/sendmail.php";?>
<?php

$fname=$_SESSION['fname'] ;
$lname=$_SESSION['lname'] ;
$user_type=$_SESSION['type'];
$email=$_SESSION['email'];

$id=$_SESSION['logged'];
date_default_timezone_set('Africa/Lagos');
$renewal_date=date('Y-m-d');
$renewal_ref=$_GET['pref'];
$amount=$_GET['amount'];
$type=$_GET['type'];

if($type == "quater"){   
    $renewal_end = date('Y-m-d', strtotime("+3 months", strtotime($renewal_date)));
}
if($type == "half"){
    $renewal_end = date('Y-m-d', strtotime("+6 months", strtotime($renewal_date)));
}
if($type == "annual"){
    $renewal_end = date('Y-m-d', strtotime("+12 months", strtotime($renewal_date)));
}

// check if user code from db
$sql= " SELECT user_code FROM users WHERE user_id = '$id'  ";
    if($result = mysqli_query($conn,$sql)){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($row["user_code"]== NULL){
            //get last  olcc number 
            $sql= (" SELECT COUNT(user_id) AS nousers FROM users;");
            if($result = mysqli_query($conn,$sql)){ 
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $number = $row['nousers'];
            }else { 
                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
            }
            //membership code generation
            $number= $number + 1;
            $code = "OLCC".$number; 
            $sql = " UPDATE users SET user_code = '$code' WHERE user_id = '$id' ";
            if($result = mysqli_query($conn,$sql)){
            // reset data  session     
            emailMembershipRegPay($email,$fname,$lname,$code,$renewal_date,$renewal_end,$amount,$user_type,$type);
                $_SESSION['code'] = $code;
            }else{
                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
            }
        }
         
    }




$insert = " INSERT INTO membership_renewal(user_id,renewal_type,renewal_date,renewal_end,renewal_amount,renewal_ref) VALUES ('$id','$type','$renewal_date','$renewal_end','$amount','$renewal_ref') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Payment was successful ";
header("Location:../member/dues.php");
}else{
    echo mysqli_error($conn);
}
?>