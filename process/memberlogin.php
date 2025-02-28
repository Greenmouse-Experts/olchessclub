<?php session_start();?>
<?php
include "../includes/dbconnection.php";
include "../includes/formfunctions.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["data"])) {
      $_SESSION['error']=" Email or Membership code is required";
      header("Location:../member/login.php");
      die();
    } else {
      $data =  test_input($_POST["data"]);
    }
    
    if(empty($_POST["password"])) {
      $_SESSION['error']="Password is required";
      header("Location:../member/login.php");
      die();
    } else {
      $password = test_input($_POST["password"]);
    }
  }
// check if user exist
$sql= " SELECT * FROM users WHERE user_email = '$data' OR  (user_code='$data') ";
    if($result = mysqli_query($conn,$sql)){
        if (mysqli_num_rows($result)<1){
            $_SESSION['error'] = " membership code or email is not registered";
            header("Location:../member/login.php");
            die();
          }       
      }
if(mysqli_num_rows($result)==1){
    //extract data from db row and store in an array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $db_password = $row["user_password"];

        $_SESSION['user_id'] = $row["user_id"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['fname'] = $row["user_firstname"];
        $_SESSION['lname'] = $row["user_lastname"];
        $_SESSION['code'] = $row["user_code"];
        $_SESSION['email'] = $row["user_email"];
        $_SESSION['phone'] = $row["user_phone"];
        $_SESSION['type'] = $row["user_type"];
        $_SESSION['gender'] = $row["user_gender"];
        $_SESSION['status'] = $row["user_status"];
        $_SESSION['chesslevel'] = $row["user_chesslevel"];
        $_SESSION['state'] = $row["user_state"];
        $_SESSION['lga'] = $row["user_lga"];
        $_SESSION['street'] = $row["user_street"];
        $_SESSION['age'] = $row["user_age"];
        $_SESSION['bday'] = $row["user_bday"];
        $_SESSION['fideno'] = $row["fide_number"];
        $_SESSION['fidetitle'] = $row["fide_title"];
        $_SESSION['membershipType'] = $row["user_membershiptype"];
        $_SESSION['lichessId'] = $row["user_lichessid"];
        $_SESSION['securityQuestion'] = $row["user_securityquestion"];
        $_SESSION['securityAnswer'] = $row["user_securityanswer"];
        $able=$row["user_disabled"];  
        
    // check for password matching
    if(password_verify($password, $db_password)){
        if($able=="yes"){
            $_SESSION['error'] = "Your account has been diabled contact Admin";
            header("Location:../member/login.php");
            die();  
        } elseif ($_SESSION['status'] =="inactive") {
          $_SESSION['error'] = "Your Account is Inactive, Account will be activated upon confirmation of payment.";
          header("Location:../member/login.php");
          die();
        }
        $_SESSION['logged'] = $row["user_id"];
        header("Location:../member/index.php");
        die();
      }else{
          $_SESSION['error'] = " Wrong login details";
          header("Location:../member/login.php");
          die();
      }
}