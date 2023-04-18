<?php include "includes/dbconnection.php";?>
<?php include "includes/sendmail.php";?>
<?php

date_default_timezone_set('Africa/Lagos');
$date=date('Y-m-d');
$tref=$_GET['pref'];
$amount=$_GET['amount'];
$type=$_GET['type'];
$duration=$_GET['duration'];
$email=$_GET['email'];
$code=$_GET['code'];
$name=$_GET['name'];


$insert = " INSERT INTO trainings(user_code,type,date,amount,tref,email,duration,fullname) VALUES ('$code','$type','$date','$amount','$tref','$email','$duration','$name') ";
$result = mysqli_query($conn,$insert);
if($result){
$_SESSION['message'] = " Payment was successful ";
emailTrainingReg($email,$name,$amount,$duration,$type);
header("Location:training.php");
}else{
    echo mysqli_error($conn);
}
?>